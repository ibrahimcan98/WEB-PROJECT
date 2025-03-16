// Select the hamburger menu button from the document
const hamburger = document.querySelector(".hamburger");

// Select the navigation menu that will be shown/hidden when clicking the hamburger
const navMenu = document.querySelector(".nav-menu");

// Select the Log In / Sign In menu that will be shown/hidden when clicking the account icon
const logsing = document.querySelector(".logsing-menu");

// Select the account icon (user icon) that toggles the Log In / Sign In menu
const account = document.querySelector(".account");

// ============================
// Toggle Hamburger Menu (Mobile Navigation)
// ============================
hamburger.addEventListener("click", (event) => {
  event.stopPropagation(); // Prevent the click event from propagating to the document (prevents instant closing)

  // Toggle the "active" class on the hamburger button to show/hide animation
  hamburger.classList.toggle("active");

  // Toggle the "active" class on the navigation menu to show/hide the menu
  navMenu.classList.toggle("active");
});

// ============================
// Toggle Log In / Sign In Menu
// ============================
account.addEventListener("click", (event) => {
  event.stopPropagation(); // Prevent the click event from propagating to the document (prevents instant closing)

  // Toggle the "active" class on the account icon (for styling purposes)
  account.classList.toggle("active");

  // Toggle the "active" class on the Log In / Sign In menu to show/hide it
  logsing.classList.toggle("active");
});

// ============================
// Close Menus When Clicking Outside
// ============================
document.addEventListener("click", (event) => {
  // If the Log In / Sign In menu is currently open, remove the "active" class to close it
  if (logsing.classList.contains("active")) {
    logsing.classList.remove("active"); // Hide the login menu
    account.classList.remove("active"); // Remove active state from account icon
  }

  // If the hamburger menu is currently open, remove the "active" class to close it
  if (navMenu.classList.contains("active")) {
    navMenu.classList.remove("active"); // Hide the navigation menu
    hamburger.classList.remove("active"); // Remove active state from hamburger button
  }
});

<?php
$page_title = "Booking";
include("./nav.php");

?>

<!--BOOKING FORM-->
<main class="booking_container">
      <aside class="form">
        <form action="booking.php" class="booking_form" method="POST">
          <h1>Booking</h1>

          <!-- Prefered date -->
          <label for="date_book">Prefered date</label>
          <input type="date" id="date_book" name="date" required />
          <hr />

          <!-- Prefered time -->
          <label for="time_book">Prefered time</label>
          <input type="time" id="time_book" name="time" required />
          <hr />

          <!-- Location-->
          <label for="location_book">Location</label>
          <select name="location_book" id="location_book" required>
            <datagroup>
              <option value="Dublin">Dublin</option>
              <option value="Cork">Cork</option>
              <option value="Limerick">Limerick</option>
            </datagroup>
          </select>
          <hr />

          <!-- Type of photoshoot-->
          <fieldset class="photoshoot">
            <legend>Type of a photoshoot</legend>
            <div class="checkbox">
              <!-- div for setting option in one line-->
              <!-- Has an error here on Safari browser: family is shown outside of the main layout -->
              <label for="portrait">Portrait</label>
              <input
                type="radio"
                name="photoshoot"
                id="portrait"
                value="portrait"
              />
              <label for="family">Family</label>
              <input
                type="radio"
                name="photoshoot"
                id="family"
                value="family"
              />
            </div>
          </fieldset>
          <hr />
          <!-- User's message to the photographer -->
          <label for="book_message">Your message</label>
          <textarea name="text" id="book_message"></textarea>
          <hr />

          <!-- Note before finish booking button -->
          <p class="note">
            Your preferred date and time may not fit into my timetable, so I
            will be in contact with you to confirm your booking date and time
          </p>

          <!-- Finish booking button-->
          <section class="button-area">
            <button type="submit" class="button-area" name="submit">
              Finish booking
            </button>
          </section>
        </form>
      </aside>
    </main>

<?php
include("./connection.php");

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  // Retrieve the form data
  $user_date = $_POST['date'];
  $user_time = $_POST['time'];
  $user_location = $_POST['location_book'];
  $user_type = $_POST['photoshoot'] ?? '';
  $user_text = $_POST['text'];

  $formatted_date = date("Y-m-d", strtotime($user_date));

  // Check if the user is logged in
  if (isset($_SESSION['UserID'])) {
      $user_id = $_SESSION['UserID'];

      // Prepare the SQL query
      $query = $conn->prepare("INSERT INTO Booking (DateOfShoot, TimeOfShoot, City, TypeOfShoot, Message, UserID) VALUES (?, ?, ?, ?, ?, ?)");
      $query->bind_param("sssssi", $formatted_date, $user_time, $user_location, $user_type, $user_text, $user_id);

      if ($query->execute()) {
          echo "<p style='color:green; text-align:center;'>Booking created successfully!</p>";
      } else {
          echo "<p style='color:red; text-align:center;'>Error: " . $query->error . "</p>";
      }

      $query->close();
  } else {
      echo "<p style='color:red; text-align:center;'>You must be logged in to make a booking.</p>";
  }
}


// Close the prepared query after execution to free up resources

?>
<?php
include("./footer.php");
?>
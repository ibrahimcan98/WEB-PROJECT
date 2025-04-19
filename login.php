<?php
session_start();
$page_title = "Account";
include("./nav.php");
include("./connection.php");

// Kullanıcı girişi kontrolü
if (!isset($_SESSION['Username']) || !isset($_SESSION['UserID'])) {
    header("Location: login.php");
    exit();
}

// Silme veya düzenleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selected_booking']) && isset($_POST['action'])) {
    $action = $_POST['action'];
    $selectedBookings = $_POST['selected_booking']; // checkbox ile birden fazla gelebilir (array)

    if ($action === "delete") {
        foreach ($selectedBookings as $bookingID) {
            $deleteQuery = $conn->prepare("DELETE FROM Booking WHERE BookingID = ? AND UserID = ?");
            $deleteQuery->bind_param("ii", $bookingID, $_SESSION['UserID']);
            $deleteQuery->execute();
            $deleteQuery->close();
        }
        echo "<p style='color:green; text-align:center;'>Selected booking(s) deleted successfully.</p>";
    } elseif ($action === "edit") {
        if (count($selectedBookings) == 1) {
            $bookingID = $selectedBookings[0];
            header("Location: booking.php?edit_id=$bookingID#bookingForm"); // Form kısmına yönlendirme
            exit();
        } else {
            echo "<p style='color:red; text-align:center;'>Please select only one booking to edit.</p>";
        }
    }
}
?>

<!-- Main Content -->
<main id="account">
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['Username']); ?>!</h1>

  <form method="POST" action="">
    <section id="account_container">
      <h2 class="account_h2">Your Bookings</h2>

      <?php
      $dateBring = $conn->prepare("SELECT BookingID, DateOfShoot, TimeOfShoot, TypeOfShoot, Message, City FROM Booking WHERE UserID = ?");
      $dateBring->bind_param("i", $_SESSION['UserID']);
      $dateBring->execute();
      $result = $dateBring->get_result();

      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<div class='booking-box'>";
              echo "<label class='booking-label'>";
              echo "<input type='checkbox' name='selected_booking[]' value='" . $row['BookingID'] . "'>";
              echo "<div class='booking-info'>";
              echo "<p><strong>Date:</strong> " . htmlspecialchars($row['DateOfShoot']) . "</p>";
              echo "<p><strong>Time:</strong> " . htmlspecialchars($row['TimeOfShoot']) . "</p>";
              echo "<p><strong>Type:</strong> " . htmlspecialchars($row['TypeOfShoot']) . "</p>";
              echo "<p><strong>Message:</strong> " . htmlspecialchars($row['Message']) . "</p>";
              echo "<p><strong>City:</strong> " . htmlspecialchars($row['City']) . "</p>";
              echo "</div>";
              echo "</label>";
              echo "</div>";
          }

          echo "<div class='booking-actions'>";
          echo "<button type='submit' name='action' value='edit' class='edit-btn'>Edit</button>";
          echo "<button type='submit' name='action' value='delete' class='delete-btn'>Delete</button>";
          echo "</div>";
      } else {
          echo "<p class='no-booking-message'>You have no bookings yet.</p>";
      }

      $dateBring->close();
      ?>
    </section>
  </form>
</main>

<?php include("./footer.php"); ?>

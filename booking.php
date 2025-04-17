<?php
session_start();
include("connection.php");
$can_book = isset($_SESSION['Username']); // if it's true
if ($_SERVER["REQUEST_METHOD"] == "POST" && $can_book) {
    $user_date = $_POST['date'];
    $user_time = $_POST['time'];
    $user_text = $_POST['text'];
    $user_id = 12;
    //$user_id = $_SESSION['UserID'];
    $formatted_date = date("Y-m-d", strtotime($user_date));
    $query = $conn->prepare("INSERT INTO Booking (UserID, DateOfShoot, TimeOfShoot, TypeOfShoot, Message) VALUES (?, ?, ?, 'Portrait', ?)"); // TODO fix user id session
    $query->bind_param("isss", $user_id,$formatted_date, $user_time, $user_text);
    if ($query->execute()) {
        echo "<script>alert('booking successful.');</script>";
    } else {
        echo "<script>alert('Error: " . $query->error . "');</script>";
    }
    $query->close();
}
?>
<?php
include ("header.php");
?>
  <!-- BOOKING FORM -->
  <main class="booking_container">
    <aside class="form">
      <?php if ($can_book): ?>
        <!-- while user login -->
        <form action="booking.php" class="booking_form" method="POST">
          <h1>Booking</h1>
          <label for="">Prefered date</label>
          <input type="date" id="date_book" name="date" required />
          <hr />
          <label for="">Prefered time</label>
          <input type="time" id="time_book" name="time" required />
          <hr />
          <label for="location_book">Location</label>
          <select name="location_book" id="location_book" required>
            <option value="Dublin">Dublin</option>
            <option value="Cork">Cork</option>
            <option value="Limerick">Limerick</option>
          </select>
          <hr />
          <fieldset class="photoshoot">
            <legend>Type of a photoshoot</legend>
            <div class="checkbox">
              <label for="portrait">Portrait</label>
              <input type="checkbox" name="portrait" id="portrait" value="portrait" />
              <label for="family">Family</label>
              <input type="checkbox" name="family" id="family" value="family" />
            </div>
          </fieldset>
          <hr />
          <label for="book_message">Your message</label>
          <textarea name="text" id="book_message"></textarea>
          <hr />
          <p class="note">
            Your preferred date and time may not fit into my timetable, so I
            will be in contact with you to confirm your booking date and
            time
          </p>
          <section class="button-area">
            <button type="submit" class="button-area" name="submit">Finish booking</button>
          </section>
        </form>
      <?php else: ?>
        <!-- Giriş yapmamışsa uyarı ver -->
        <h2 style="color: red;">please make sure you loged in!</h2>
        <a href="login.php">login</a>
      <?php endif; ?>
    </aside>
  </main>
  <script src="./javascript/script.js"></script>
</body>
</html>

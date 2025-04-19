<?php
$page_title = "Booking";
session_start();
include("./nav.php");
include("./connection.php");

// Default values for form fields
$edit_mode = false;
$date_value = "";
$time_value = "";
$city_value = "";
$type_value = "";
$message_value = "";
$bookingID = null;

if (isset($_GET['edit_id']) && isset($_SESSION['UserID'])) {
    $edit_mode = true;
    $bookingID = $_GET['edit_id'];

    $query = $conn->prepare("SELECT * FROM Booking WHERE BookingID = ? AND UserID = ?");
    $query->bind_param("ii", $bookingID, $_SESSION['UserID']);
    $query->execute();
    $result = $query->get_result();

    if ($result && $result->num_rows > 0) {
        $booking = $result->fetch_assoc();
        $date_value = $booking['DateOfShoot'];
        $time_value = $booking['TimeOfShoot'];
        $city_value = $booking['City'];
        $type_value = $booking['TypeOfShoot'];
        $message_value = $booking['Message'];
    }
    $query->close();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && isset($_SESSION['UserID'])) {
    $user_date = $_POST['date'];
    $user_time = $_POST['time'];
    $user_location = $_POST['location_book'];
    $user_type = $_POST['photoshoot'] ?? '';
    $user_text = $_POST['text'];
    $user_id = $_SESSION['UserID'];

    if ($edit_mode && $bookingID) {
        $query = $conn->prepare("UPDATE Booking SET DateOfShoot=?, TimeOfShoot=?, City=?, TypeOfShoot=?, Message=? WHERE BookingID=? AND UserID=?");
        $query->bind_param("sssssii", $user_date, $user_time, $user_location, $user_type, $user_text, $bookingID, $user_id);
    } else {
        $query = $conn->prepare("INSERT INTO Booking (DateOfShoot, TimeOfShoot, City, TypeOfShoot, Message, UserID) VALUES (?, ?, ?, ?, ?, ?)");
        $query->bind_param("sssssi", $user_date, $user_time, $user_location, $user_type, $user_text, $user_id);
    }

    if ($query->execute()) {
        echo "<p style='color:green; text-align:center;'>Booking " . ($edit_mode ? "updated" : "created") . " successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . $query->error . "</p>";
    }
    $query->close();
}
?>

<!--BOOKING FORM-->
<main class="booking_container">
    <aside class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?><?php echo $edit_mode ? '?edit_id=' . $bookingID : ''; ?>#bookingForm" class="booking_form" method="POST" id="bookingForm">
            <h1><?php echo $edit_mode ? 'Edit Booking' : 'Booking'; ?></h1>

            <label for="date_book">Prefered date</label>
            <input type="date" id="date_book" name="date" required value="<?php echo htmlspecialchars($date_value); ?>" />
            <hr />

            <label for="time_book">Prefered time</label>
            <input type="time" id="time_book" name="time" required value="<?php echo htmlspecialchars($time_value); ?>" />
            <hr />

            <label for="location_book">Location</label>
            <select name="location_book" id="location_book" required>
                <option value="Dublin" <?php if ($city_value == 'Dublin') echo 'selected'; ?>>Dublin</option>
                <option value="Cork" <?php if ($city_value == 'Cork') echo 'selected'; ?>>Cork</option>
                <option value="Limerick" <?php if ($city_value == 'Limerick') echo 'selected'; ?>>Limerick</option>
            </select>
            <hr />

            <fieldset class="photoshoot">
                <legend>Type of a photoshoot</legend>
                <div class="checkbox">
                    <label for="portrait">Portrait</label>
                    <input type="radio" name="photoshoot" id="portrait" value="portrait" <?php if ($type_value == 'portrait') echo 'checked'; ?> />
                    <label for="family">Family</label>
                    <input type="radio" name="photoshoot" id="family" value="family" <?php if ($type_value == 'family') echo 'checked'; ?> />
                </div>
            </fieldset>
            <hr />

            <label for="book_message">Your message</label>
            <textarea name="text" id="book_message"><?php echo htmlspecialchars($message_value); ?></textarea>
            <hr />

            <p class="note">
                Your preferred date and time may not fit into my timetable, so I will be in contact with you to confirm your booking.
            </p>

            <section class="button-area">
                <button type="submit" class="button-area" name="submit">
                    <?php echo $edit_mode ? 'Update Booking' : 'Finish Booking'; ?>
                </button>
            </section>
        </form>
    </aside>
</main>

<?php include("./footer.php"); ?>

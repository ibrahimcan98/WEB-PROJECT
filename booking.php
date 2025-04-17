<?php
$page_title = "Booking";
include("app/nav.php");
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
include("app/connection.php");

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data sent via POST
    $user_date = $_POST['date'];     // The date input from the form
    $user_time = $_POST['time'];     // The time input from the form
    $user_text = $_POST['text'];     // The text input from the form
    // $user_location = $_POST['location_book'];  // This line is commented out but could be used for location data
    
    // Format the date to match the MySQL date format (YYYY-MM-DD)
    $formatted_date = date("Y-m-d", strtotime($user_date));

    // Prepare the SQL query to insert the booking data into the "booking" table
    $query = $conn->prepare("INSERT INTO booking (date, time, text) VALUES (?,?,?)");

    // Bind the form values to the prepared statement
    // The "sss" means all three parameters (date, time, and text) are strings
    $query->bind_param("sss", $formatted_date, $user_time, $user_text);

    // Execute the query and check if it was successful
    if ($query->execute()) {
        // If the query is successful, output a success message
        echo "added date: " . $formatted_date . " successfully";
    } else {
        // If there's an error with the query execution, output the error message
        echo "error: " . $query->error;
    }
}

// Close the prepared query after execution to free up resources
$query->close();
?>
<?php
include("app/footer.php");
?>
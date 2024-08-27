<?php


session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $reservation_date = htmlspecialchars(trim($_POST['reservation_date']));
    $reservation_time = htmlspecialchars(trim($_POST['reservation_time']));
    $guests = filter_var(trim($_POST['guests']), FILTER_SANITIZE_NUMBER_INT);
    $parking = isset($_POST['parking']) ? 'Yes' : 'No';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Validate phone number
    if (!preg_match('/^\d{10}$/', $phone)) {
        die("Invalid phone number. It should be 10 digits.");
    }

    // Validate number of guests
    if ($guests <= 0) {
        die("Number of guests must be greater than 0.");
    }

    // Database connection details
    $dsn = 'mysql:host=localhost;dbname=the_gallery_cafe';
    $db_user = 'root'; // Change as needed
    $db_pass = ''; // Change as needed

    try {
        // Create PDO instance
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement
        $stmt = $pdo->prepare("INSERT INTO table_reservation (full_name, email, phone, reservation_date, reservation_time, guests, parking)
                                VALUES (:full_name, :email, :phone, :reservation_date, :reservation_time, :guests, :parking)");

        // Bind parameters
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':reservation_date', $reservation_date);
        $stmt->bindParam(':reservation_time', $reservation_time);
        $stmt->bindParam(':guests', $guests);
        $stmt->bindParam(':parking', $parking);

        // Execute statement
        $stmt->execute();

        // Send confirmation email
        $to = $email;
        $subject = "Reservation Confirmation";
        $message = "Dear $full_name,\n\nThank you for your reservation. Here are the details:\n\nDate: $reservation_date\nTime: $reservation_time\nGuests: $guests\nParking: $parking\n\nWe look forward to serving you.\n\nBest regards,\nThe Gallery Cafe";
        $headers = "From: thegallerycafe042@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "New reservation created successfully. Confirmation email sent.";
            header('location:home.php');
        } else {
            echo "New reservation created successfully. Error sending confirmation email.";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $pdo = null;
} else {
    echo "Please submit the form.";
}
?>

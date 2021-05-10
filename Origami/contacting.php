<?php
$conn = mysqli_connect("localhost", "root", "", "howtoorigami");
if ($conn) {
    
        $full_name = $_GET['full_name'];
        $email = $_GET['email'];
        $city = $_GET['city'];
        $subject = $_GET['subject'];
        $message = $_GET['message'];
        $sql = "INSERT INTO contact (full_name, email, city, subject, message) VALUES ('$full_name', '$email', '$city', '$subject', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "Thank you!";
           
        } else {
            echo "error";
        }
        mysqli_close($conn);
}
?>

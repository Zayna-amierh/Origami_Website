<?php
$conn = mysqli_connect("localhost", "root", "", "howtoorigami");
if ($conn) {
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
if (mysqli_query($conn, $sql)) {

} else {
echo "error";
}


mysqli_close($conn);
}
?>

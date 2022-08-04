<?php
$name = $_POST['fullname'];
$number = $_POST['contactno'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
$sql = "INSERT INTO contact_query(query_name,query_mail,query_number,query_message) values('{$name}','{$email}','{$number}','{$message}')" or die("query unsuccessful.");
$result = mysqli_query($conn, $sql);
echo '<div></div><b>We have received your message, We will contact you.Thank you </b></div>';
mysqli_close($conn);

?>

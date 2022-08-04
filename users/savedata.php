<?php
session_start();
$name = $_POST['fullname'];
$number = $_POST['mobileno'];
$email = $_POST['emailid'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$blood_group = $_POST['blood'];
$address = $_POST['address'];
$password = $_POST['password'];
$password1 = md5($password);
$conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
$conn1 = mysqli_connect("localhost", "root", "", "chat_db") or die("Connection error");


if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $_SESSION['msg'] = "Only letters and white space allowed";
  header('Location:http://localhost/bdms/users/index.php#chefs');

}

elseif (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", $email)) {
  $_SESSION['msg'] = "Invalid email format";
  header('Location:http://localhost/bdms/users/index.php#chefs');
}


elseif(!preg_match("/^[a-z A-Z 0-9]{4,8}$/",$password)) {
    $_SESSION['msg']= "Password should be at least 8 to 16 characters.. ";
    header('Location:http://localhost/bdms/users/index.php#chefs');
}

elseif(!preg_match("/^[0-9]{10}$/", $number)){
	$_SESSION['msg'] ="Phone number incorrect!!";
	header('Location:http://localhost/bdms/users/index.php#chefs');
}

elseif($age >=18 && $age<=60){
	$sql = "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
	$result = mysqli_query($conn, $sql);

	$sql1 = "INSERT INTO users (name, username, password, avatar) values ('$name','$name','$password1','')";
	$result1 = mysqli_query($conn1, $sql1);
	$_SESSION['msg']="New donor added!!!";
	header('Location:http://localhost/bdms/users/index.php#chefs');

}
else
{
	$_SESSION['msg']="Your not eligible for blood donation";
	header('Location:http://localhost/bdms/users/index.php#chefs');
}






//Ior die("query unsuccessful.")
//echo json_encode($result);
// header('Location:http://localhost/bdms/users/index.php#chefs');
//echo "Added successfully";
//return back();
// mysqli_close($conn);

?>

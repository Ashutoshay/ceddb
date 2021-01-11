<?php
include 'database_connection.php';

if(isset($_POST['submit'])){
	echo "Hello";
$user_email = $_POST['email'];
$user_number = $_POST['mobile_no'];
$user_name = $_POST['name'];
$user_password = $_POST['password'];
$status = 1;
$user = 0;

	// $insert = "SELECT * FROM `student`(`pname`,`email`,`sname`,`gender`,`bday`,`phone`,`yesno`,`address`,`city`,`zip`)VALUES (`$pname`,`$email`,`$sname`,`$gender`,`$bday`,`$phone`,`$yesno`,`$address`,`$city`,`$zip`)";
$sql = "INSERT INTO signup (email_id, name, mobile_no, password, status, admin_or_not)VALUES('".$user_email."','".$user_name."','".$user_number."','".$user_password."', '".$status."', '".$user."')";
	$query = mysqli_query($connect,$sql);
    // header("location:display.php");
    if ($query === TRUE) {
        echo "New record created successfully";
        header("location:login.php");
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
  
}
?>
<?php 
include ('user/database_connection.php');
if(isset($_SESSION['fare']))
{
$status = 1;
$fid = $_SESSION['user_id'];
 $a = $_SESSION['pickup'];
$b = $_SESSION['drop'];
$c = $_SESSION['cab'];
$d = $_SESSION['luggage'];
$fare = $_SESSION['fare'];
$dist = $_SESSION['distance'];
$sql = "INSERT INTO ride (pickup, drop_point, cab_type, luggage, total_fare, total_distance, ride_status, id)VALUES('".$a."','".$b."','".$c."','".$d."', '".$fare."', '".$dist."', '".$status."', '".$fid."')";
$query = mysqli_query($connect,$sql);
// echo var_dump($sql);
// echo var_dump($query);
// die;
// header("location:display.php");
if ($query === TRUE) {
echo "New record created successfully";
header("location: user/dashboard/userdashboard.php");
// header("location:userdashboard.php");
} else {
echo "Error: " . $sql . "<br>" . $connect->error;
}
}
else{
    echo "<script>alert('Login failed')</script>";
    header("location: user/dashboard/userdashboard.php");
}
?>
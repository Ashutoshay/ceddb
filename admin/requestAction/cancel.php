<?php
include('../../user/database_connection.php');
$id = $_GET['id'];
echo $cab;
// echo $date;
// $name = $_GET['name'];
$sql = "select  ride.ride_id, ride.ride_status from signup Inner join ride on signup.id=ride.id ";
$query = mysqli_query($connect, $sql);
echo var_dump($query);
$row = mysqli_num_rows($query);
if($row>0){
// $result = $query->fetch_assoc();
// if($result['id'] == $id){
    // echo var_dump($result['id']);
// }
while ($res = mysqli_fetch_array($query)) { 
if($res['ride_id'] == $id){
    $up = " update ride set ride_status=0 where ride_id='$id'";
    $query = mysqli_query($connect, $up);
    header("location: ../ride_request.php");
} 
}}
else{
    echo "nont";
}

?>
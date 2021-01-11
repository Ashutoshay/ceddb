<?php
include('../../user/database_connection.php');
$id = $_GET['id'];

// echo $date;
// $name = $_GET['name'];
$sql = "select signup.id, signup.status from signup ";
$query = mysqli_query($connect, $sql);
echo var_dump($query);
$row = mysqli_num_rows($query);
if($row>0){
// $result = $query->fetch_assoc();
// if($result['id'] == $id){
    // echo var_dump($result['id']);
// }
while ($res = mysqli_fetch_array($query)) { 
if($res['id'] == $id){
    $up = " update signup set status=1 where id='$id'";
    $query = mysqli_query($connect, $up);
    header("location: ../user_request.php");
} 
}}
else{
    echo "not update";
}

?>
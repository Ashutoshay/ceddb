<?php  

session_start();
if(isset($_SESSION['user_nam'])){
    header("location: ../faredatabase.php");
}
else{
    header("location: login.php");
}


?>
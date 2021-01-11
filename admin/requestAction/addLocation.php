<?php include ('../user/database_connection.php'); 
// $name = $_SESSION['user_nam'];
// $customer_id = $_SESSION['user_id'];

$sql = " insert into location (location_name, location_distance, is_available) values()";

$query = mysqli_query($connect, $sql);
//  echo "string";

$row = mysqli_num_rows($query);
// $result = $query->fetch_assoc();


//    echo $customer_id;
   // echo $result['pickup'];

//  $sql2 = " select * from ride where id= '$customer_id'";
//  $query2 =  mysqli_query($connect, $sql2);
//  $row2 = mysqli_num_rows($query2);
//  $result2 = $query2->fetch_assoc();
//  if($row2){
//      echo "success";
//  }
//  echo $result2['pickup'];


?>
<?php 
include ('../database_connection.php'); 
$name = $_SESSION['user_nam'];
if(isset($_POST['submit']))
{


 $customer_id = $_SESSION['user_id'];

 $email = $_POST['email'];
 $oldpassword = $_POST['old_password'];
 $newpassword = $_POST['new_password'];
 echo $newpassword;

 $sql = " update signup set password = '$newpassword'  where email_id = '$email' and password = '$oldpassword' ";

 $query = mysqli_query($connect, $sql);
 echo var_dump($query);
 if($email == "" && $oldpassword== "" && $newpassword == "")
 {
    echo "<script>alert('Fill the data')</script>";
 }
 else{

 
//  echo "string";
//  $row = mysqli_num_rows($query);
    //  $result = $query->fetch_assoc();
if ($connect->query($sql) === TRUE) {
   
        echo "<script>alert('Record updated successfully')</script>";
    
    
  } else {
    echo "<script>alert('Fill Correct Email and password')</script>";
  }

    echo $customer_id;
    // echo $result['pickup'];

//  $sql2 = " select * from ride where id= '$customer_id'";
//  $query2 =  mysqli_query($connect, $sql2);
//  $row2 = mysqli_num_rows($query2);
//  $result2 = $query2->fetch_assoc();
//  if($row2){
//      echo "success";
//  }
//  echo $result2['pickup'];
}}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Dashboard</title>
  </head>
  <body>
      <div style="height:90px;">
  <nav class="navbar navbar-dark bg-dark justify-content-between" style="height:90px;">
  <a class="navbar-brand text-warning" style="font-size:40px;font-weight:700;" href="../../index.php">CedCab</a>
  <form class="form-inline" action ="../logout.php">
    <!-- <p>Hello,Admin</p> -->
    <a href="../logout.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
  </form>
</nav>
</div>
    <div class="row">
        <div class="col-md-2 bg-dark p-3">
            <p class="text-white" style="font-size:20px;">Hello, <?php echo $name; ?></p>
             <ul class="list-group">
             <li class="list-group-item bg-primary m-1"><a href="userdashboard.php" class="text-white">Home</a></li>
             <li class="list-group-item bg-warning m-1"><a href="../../index.php">Book new Ride</a></li>
                <li class="list-group-item bg-primary m-1"><a href="ride_information.php" class="text-white">Rides</a></li>
                <li class="list-group-item bg-warning m-1"><a href="account.php">Accounts</a></li>
                <li class="list-group-item bg-primary m-1">Second item</li>
                <li class="list-group-item bg-warning m-1">Third item</li>
                <li class="list-group-item bg-primary m-1">Second item</li>
               
            </ul>
        </div>
        <div class="col-md-10 p-3">
        <center>
        <h3>Update Password</h3>
        <form  method="post" class="bg-dark text-white">
		
		<hr>
        <div class="form-group">
        <div class="row">
                <div class="col-md-4"><label for="email">Enter Email</label></div>
                <div class="col-md-6"><input type="email"  class="form-control" name="email" placeholder="Email" required="required"></div>
            </div>
        
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-md-4"><label for="email">Enter Old Password</label></div>
                <div class="col-md-6"><input type="password" class="form-control" name="old_password" placeholder=" Old Password" required="required"></div>
            </div>
        
        </div>
		<div class="form-group">
        <div class="row">
                <div class="col-md-4"><label for="email">Enter New Password</label></div>
                <div class="col-md-6"><input type="password" class="form-control" name="new_password" placeholder="New Password" required="required"></div>
            </div>
            
        </div>       
        
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Update</button>
        </div>
    </form></center>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
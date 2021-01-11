<?php include ('../user/database_connection.php'); 

// $sql = " select * from signup where email_id = '$user_email' and password = '$user_password'";
// 	$query = mysqli_query($connect, $sql);
// 	echo "string";
//     $row = mysqli_num_rows($query);
//     $result = $query->fetch_assoc()
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
      <div style="height:90px;">
  <nav class="navbar navbar-dark bg-dark justify-content-between" style="height:90px;">
  <a class="navbar-brand text-warning" style="font-size:40px;font-weight:700;" href="../index.php">CedCab</a>
  <p class="text-white" style="font-size:25px;">
        <?php 
                        
                        $sql = " select sum(total_fare) from ride where ride_status = 2 ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = $query->fetch_assoc();
                        echo "Total Earning = Rs. ". $row['sum(total_fare)'];
                ?>
        </p>
  <form class="form-inline"  action ="../user/logout.php">
    <!-- <p>Hello,Admin</p> -->
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
  </form>
</nav>
</div>
    <div class="row">
        <div class="col-md-2 bg-dark p-3">
        
        <p class="text-white">Hello, Admin</p>
             <ul class="list-group">
                <li class="list-group-item bg-warning m-2"><a href="admindashboard.php">Home</a></li>
                <li class="list-group-item bg-primary m-1"><a href="ride_request.php" class="text-white">Ride Request</a></li>
                <li class="list-group-item bg-warning m-1"><a href="completed_request.php">Completed Ride</a></li>
                <li class="list-group-item bg-primary m-1"><a href="all_ride.php" class="text-white">All Ride</a></li>
                <li class="list-group-item bg-warning m-1"><a href="user_request.php">Pending User</a></li>
                <li class="list-group-item bg-primary m-1"><a href="approved_ride.php" class="text-white">Approved User</a></li>
                <li class="list-group-item bg-warning m-1"><a href="all_user.php">All User</a></li>
                <li class="list-group-item bg-primary m-2"><a href="available_location.php" class="text-white">Available Location</a></li>
            </ul>
        </div>
        <div class="col-md-10 p-3">
            <div class="row m-3">
                <div class="col-md-3 bg-warning m-3">
               
                <div class="card-body text-center">
                        <h5 class="card-title">Ride Request</h5>
                        <p class="card-text">
                        <?php 
                        
                                $sql = " select * from ride where ride_status = 1 ";
                                $query = mysqli_query($connect, $sql);
                                // echo var_dump($query);
                                $row = mysqli_num_rows($query);
                                echo $row;
                        ?>
                        </p>
                        <a href="ride_request.php" class="btn btn-primary">Just Click</a>
                    </div>
</div>
                <div class="col-md-3 bg-primary m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">Completed Ride</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from ride where ride_status = 2 ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row;
                ?>
                         </p>
                        <a href="completed_request.php" class="btn btn-warning">Just Click</a>
                    </div>
                </div>
                <div class="col-md-3 bg-warning m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">All Ride</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from ride ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row;
                ?>
                         </p>
                        <a href="all_ride.php" class="btn btn-primary">Just Click</a>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row m-3">
                <div class="col-md-3 bg-primary m-3">
               
                <div class="card-body text-center">
                        <h5 class="card-title">Pending User</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from signup where status=0 ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row;
                ?>
                         </p>
                        <a href="user_request.php" class="btn btn-warning">Just Click</a>
                    </div>
</div>
                <div class="col-md-3 bg-warning m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">Apporved User</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from signup where status=1 ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row-1;
                ?>
                         </p>
                        <a href="approved_ride.php" class="btn btn-primary">Just Click</a>
                    </div>
                </div>
                <div class="col-md-3 bg-primary m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">All User</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from signup  ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row-1;
                ?>
                        </p>
                        <a href="all_user.php" class="btn btn-warning">Just Click</a>
                    </div></div>
                    <div class="col-md-3 bg-primary m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">Available Location</h5>
                        <p class="card-text">
                        
                        </p>
                        <a href="available_location.php" class="btn btn-warning">Just Click</a>
                    </div></div>
                  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php 



?>
<?php 

include ('../database_connection.php'); 
 $name = $_SESSION['user_nam'];
 $customer_id = $_SESSION['user_id'];

 $sql = " select * from ride where id = '$customer_id' ";

 $query = mysqli_query($connect, $sql);
//  echo "string";
 $row = mysqli_num_rows($query);
 $result = $query->fetch_assoc();
 

    echo $customer_id;
    echo $result['pickup'];

//  $sql2 = " select * from ride where id= '$customer_id'";
//  $query2 =  mysqli_query($connect, $sql2);
//  $row2 = mysqli_num_rows($query2);
//  $result2 = $query2->fetch_assoc();
//  if($row2){
//      echo "success";
//  }
//  echo $result2['pickup'];

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
                <li class="list-group-item bg-primary m-1"><a href="#" class="text-white">Rides</a></li>
                <li class="list-group-item bg-warning m-1"><a href="account.php">Accounts</a></li>
                <li class="list-group-item bg-primary m-1">Second item</li>
                <li class="list-group-item bg-warning m-1">Third item</li>
                <li class="list-group-item bg-primary m-1">Second item</li>
               
            </ul>
        </div>
        <div class="col-md-10 p-3">
            <div class="row m-3">
                <div class="col-md-3 bg-warning m-3">
                                
                <div class="card-body text-center">
                        <h5 class="card-title">Pending Rides</h5>
                        <p class="card-text"><?php 
                        
                        $sql = " select * from ride where ride_status = 1 and id='$customer_id' ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row."<br>";
                        echo '<a href="ride_status.php?id=1" class="btn btn-primary">Check</a>';
                ?></p>
                        
                    </div>
</div>
                <div class="col-md-3 bg-primary m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">Completed Rides</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from ride where ride_status = 2 and id='$customer_id' ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row;
                ?>
                        </p>
                        <a href="completed_status.php" class="btn btn-warning"> Check</a>
                    </div>
                </div>
                <div class="col-md-3 bg-warning m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">Total Rides</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select * from ride where  id='$customer_id' ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = mysqli_num_rows($query);
                        echo $row;
                ?>
                         </p>
                        <a href="total_status.php" class="btn btn-primary">Check</a>
                    </div>
                </div>
                <div class="col-md-3 bg-primary m-3">
                <div class="card-body text-center">
                        <h5 class="card-title">Total Expanses</h5>
                        <p class="card-text">
                        <?php 
                        
                        $sql = " select sum(total_fare) from ride where  id='$customer_id' ";
                        $query = mysqli_query($connect, $sql);
                        // echo var_dump($query);
                        $row = $query->fetch_assoc();
                        echo "Rs. ". $row['sum(total_fare)'];
                ?>
                         </p>
                        <a href="#" class="btn btn-warning" > Invoice</a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
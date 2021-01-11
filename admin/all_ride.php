<?php include ('../user/database_connection.php'); 
// $name = $_SESSION['user_nam'];
// $customer_id = $_SESSION['user_id'];

$sql = " select signup.id, signup.name, ride.ride_status,ride.cab_type, ride.pickup, ride.drop_point, ride.total_distance, ride.luggage, ride.ride_date, ride.total_fare from signup Inner join ride on signup.id=ride.id ";

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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Admin</title>
  </head>
  <body>
      <div style="height:90px;">
  <nav class="navbar navbar-dark bg-dark justify-content-between" style="height:90px;">
  <a class="navbar-brand text-warning" style="font-size:40px;font-weight:700;" href="../index.php">CedCab</a>
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
                <li class="list-group-item bg-warning m-1"><a href="user_request.php">Pending User </a></li>
                <li class="list-group-item bg-primary m-1"><a href="approved_ride.php" class="text-white">Approved User</a></li>
                <li class="list-group-item bg-warning m-1"><a href="all_user.php">All User</a></li>
                <li class="list-group-item bg-primary m-2"><a href="available_location.php" class="text-white">Available Location</a></li>
            </ul>
        </div>
        
    
       
        <div class="col-md-10 p-3">
        <h3 class="bg-dark text-center text-white">All Rides</h3>

        <table class="table table-striped" border="1" id="tab">
   			<?php 

   			?>
        <thead>
   			<tr class="bg-dark text-white text-center"> 
   				
   				<th>Id</th>
                <th>Name</th>
   				<th>Pick Up</th>
   				<th>Drop</th>
   				<th>Total Distance</th>
   				<th>Luggage</th>
   				<th>Ride Date</th>
                <th>Total Fare</th>
                <th>Ride Status</th>
                
   			
   			</tr></thead>
        <tbody>
   	<?php
		
			
    // echo var_dump($result['status']);
       
			while ($res = mysqli_fetch_array($query)) { 
                if($res['ride_status'] == 1 || $res['ride_status'] == 2 || $res['ride_status'] == 0){
                   
	?>
   		<tr class="text-center">
   				<td><?php echo $res['id']; ?></td>
                   <td><?php echo $res['name']; ?></td>
                 <td><?php echo $res['pickup']; ?></td>
   				<td><?php echo $res['drop_point']; ?></td>
   				<td><?php echo $res['total_distance']; ?></td>
   				<td><?php echo $res['luggage']; ?></td>
   				<td><?php echo $res['ride_date']; ?></td>
   				<td><?php echo $res['total_fare']; ?></td>
                <td><?php echo $res['ride_status'] ?></td>
   				
   				
   				
   			</tr>
   			<?php

      }
    }
     
          ?>
            	
   	  </tbody>	</table>
        </div>
    
      
    </div>
    
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
  $(document).ready( function () {
    $('#tab').DataTable();
} );
  </script>
</body>
</html>
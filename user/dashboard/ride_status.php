<?php 
include ('../database_connection.php'); 
 $name = $_SESSION['user_nam'];
 $customer_id = $_SESSION['user_id'];

 $sql = " select * from ride where id = '$customer_id' ";

 $query = mysqli_query($connect, $sql);
//  echo "string";
 $row = mysqli_num_rows($query);
//  $result = $query->fetch_assoc();
 

    echo $customer_id;
    // echo $result['ride_status'];
    echo $row;

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
    <title>User Dashboard</title>
  </head>
  <body>
      <div style="height:90px;">
  <nav class="navbar navbar-dark bg-dark justify-content-between" style="height:90px;">
  <a class="navbar-brand text-warning" style="font-size:40px;font-weight:700;" href="../index.php">CedCab</a>
  <form class="form-inline" action ="../logout.php">
    <!-- <p>Hello,Admin</p> -->
    <a href="../logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
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
                <li class="list-group-item bg-warning m-1">Third item</li>
                <li class="list-group-item bg-primary m-1">Second item</li>
            </ul>
        </div>
        <div class="col-md-10 p-3">
        <h3 class="bg-dark text-center text-white">Pending Rides</h3>

        <table class="table table-striped" border="1" id="tab">
   			<?php 

   			?>
        <thead>
   			<tr class="bg-dark text-white text-center"> 
   				<th>Id</th>
   				<th>Pickup Point</th>
   				<th>Drop Point</th>
   				<th>Cab Type</th>
   				<th>Luggage</th>
   				<th>Total Distance</th>
   				<th>Ride Date</th>
   				<th>Total Fare</th>
   			
   			</tr></thead>
        <tbody>
   	<?php
		
			
    
		
			while ($res = mysqli_fetch_array($query)) {
        echo $res['ride_status'];
        if($res['ride_status'] == 1){
	?>
   		<tr class="text-center">
   				<td><?php echo $res['ride_id']; ?></td>
   				<td><?php echo $res['pickup']; ?></td>
   				<td><?php echo $res['drop_point']; ?></td>
   				<td><?php echo $res['cab_type']; ?></td>
   				<td><?php echo $res['luggage']; ?></td>
   				<td><?php echo $res['total_distance']; ?></td>
   				<td><?php echo $res['ride_date']; ?></td>
   				<td><?php echo $res['total_fare']; ?></td>
   				
   				
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
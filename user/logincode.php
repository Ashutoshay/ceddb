<?php 
include ('database_connection.php');

if(isset($_POST['submit'])){
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$sql = " select * from signup where email_id = '$user_email' and password = '$user_password'";
	$query = mysqli_query($connect, $sql);
	echo "string";
    $row = mysqli_num_rows($query);
    $result = $query->fetch_assoc();
    // echo var_dump($result['admin_or_not']);
		if ($row) {
            # code...
            if($result['admin_or_not'] == 1)
            {
                echo "admin";
                header("location: ../admin/admindashboard.php");

            }else
            {   
                if($result['status'] == 1){
                    echo " unblocked user";
                    $_SESSION['user_id'] = $result['id'];
                    $_SESSION['user_nam'] = $result['name'];
                    echo $_SESSION['user_id'];
                    header("location: ../faredatabase.php");
                    
                }else{
                    echo "<script type=\"text/javascript\>alert('blocked user')</script>";
                    header("location: login.php");
                    
                }
               
            }
			// echo "Login Successful";
			// $_SESSION['user'] = $user_email;
			// echo $_SESSION['user'];
			//die;
			// header("location:../curd/display.php");

		}else
		{
            echo "login failed";
            echo "<script>alert('Login failed')</script>";
			header("location:login.php");
		}
	

}
?>



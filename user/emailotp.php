<?php 
session_start();
if (isset($_POST['ff'])) {
	if(time() - $_SESSION['login_time']>120){
		session_unset();
		session_destroy();
		echo "Session destroy";
	}else{
		if($_POST['opt']==$_SESSION['otp']){
            echo "OTP Verified";
            header("location:mobile.php");
			
		}else{
            echo "OTP not verified ";
            header("email.php");
			session_destroy();
			session_unset();
		}
	}
}

?>
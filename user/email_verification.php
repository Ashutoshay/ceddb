<?php 
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  session_start();
require 'vendor/autoload.php'; 
  $_SESSION['user_mail'] = $_POST['user_email'];
//   if(isset($_POST['submit'])){
	$mail = new PHPMailer(true); 
  
try { 
		$user_password = rand(100000,999999);
		// $user_encrypted_password = password_hash($user_password, PASSWORD_DEFAULT);
		// $user_activation_code = md5(rand());
		// $insert_query = "INSERT INTO register_user (user_name, user_email, user_password, user_activation_code, user_email_status) VALUES (:user_name, :user_email, :user_password, :user_activation_code, :user_email_status)";
		// $statement = $connect->prepare($insert_query);
		// $statement->execute(
		// 	array(
		// 		':user_name'  => $_POST['user_name'],
		// 		':user_email' => $_POST['user_email'],
		// 		':user_password' => $user_encrypted_password,
		// 		':user_activation_code' => $user_activation_code,
		// 		':user_email_status' => 'not verified'
		// 	)
		// );
  //         $result = $statement->fetchAll();          

    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com;';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'ashutoshay2505@gmail.com';                  
    $mail->Password   = 'ashu9610';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->setFrom('ashutoshay2505@gmail.com', 'Ashutosh Yadav');            
    $mail->addAddress($_POST['user_email']); 
    // $mail->addAddress('receiver2@gfg.com', 'Name'); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Subject'; 
    $mail->Body    = 'HTML message body in <b>bold</b> '.$user_password; 
    $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
    $mail->send(); 
    $_SESSION['otp'] = $user_password;
    if(isset($_SESSION['otp'])){
    	$_SESSION['login_time'] = time();
    }
    echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 
//  } 

?> 
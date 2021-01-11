<?php
session_start();
$mob = $_POST['user_number'];
$_SESSION['user_mobile'] = $mob;
// extract($_POST);
$ran = rand(1000,9999);
$_SESSION['otp'] = $ran;
    if(isset($_SESSION['otp'])){
      $_SESSION['login_time'] = time();
    
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "Your OTP is $ran",
    "language" => "english",
    "route" => "p",
    "numbers" => "$mob",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: 4HX0GsuebgCL9mviBVASpaMIq56ZTo2ftE8jWdQcKnhUrxON1RmQLj5fXvIZlO3Sw9UAzr2N7tTndVe0",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}


?>
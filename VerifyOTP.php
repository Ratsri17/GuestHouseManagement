<?php
session_start();
$OTPValue=$_POST['otp']; ### OTP value entered by user

#### 2Factor Credentials
$YourAPIKey='a034d56a-3a23-11e8-a895-0200cd936042';

#### Retrive OTP value stored in session variable ( in SendOTP Process )
$OTPSent=$_SESSION['OTPSent'];

if ($OTPSent==$OTPValue ){
echo "OTP Matched";
header('Location: index.php');
}
else{
echo "OTP Not Matched";
#header('Location: index.php');
}
?>
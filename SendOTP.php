<?php

session_start();
$mobile=$_POST['phone'];
$SentTo='+91'.$mobile; ### Customer's phone number in International number format ( with leading + sign)

### Generate randon OTP
$OTPValue=rand(11111,99999);

$_SESSION['OTPSent']= $OTPValue;

#### 2Factor Credentials
$YourAPIKey='a034d56a-3a23-11e8-a895-0200cd936042';

### Sending OTP to Customer's Number
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$url = "https://2factor.in/API/V1/$YourAPIKey/SMS/$SentTo/$OTPValue"; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
$Response= curl_exec($ch); 
curl_close($ch);
?>

<html>
<head>
</head>
<body>
<form action="VerifyOTP.php" method="post">
<input type="text" name ="otp" required>
<input type="submit" name="submit" value="submit OTP">
</form>
</body>
</html>
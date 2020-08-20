<?php

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- bypork.com -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="BYPORK SAVE AFRICA MAKE LOTS OF MONEY">
<meta name="description" content="Bypork - Saving Africa With Pork">
<meta name="author" content="https://www.bypork.com/">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Bypork - Saving Africa With Agriculture</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/logoicon.png">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css">

<!-- slick-slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">

<link rel="stylesheet" type="text/css" href="css/slick-theme.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css">

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css">

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css">

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- brand rep css -->
<link rel="stylesheet" type="text/css" href="css/brand-rep.css">

</head>

<body>


<div class="container">
  <header class="header">
    <h1 class="text-center" id="h11"><strong class="ttm-textcolor-skincolor fw-600">THANK YOU</strong></h1>
    <h3 class="text-center" id="h11"> Transaction successful<strong class="ttm-textcolor-skincolor fw-600"></strong></h3>
    <p>Your reference is <span><?php echo($_GET['reference']); ?></span> Check your email for receipt and documents. Please note, email messages could take a while.</p>
                            <div>
                                <a href="index.php" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mt-20 text-center"></i>Back To Home</a>
                            </div>
</div>

<!--footer start-->
<!--footer end-->

<!-- Javascript -->

</body>
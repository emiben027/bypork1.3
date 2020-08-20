<?php
$curl = curl_init();

$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$amount = $_POST["amount"] * 100;
$reference = $_POST["reference"];
$birthday = $_POST["birthday"];
$bank = $_POST["bank"];
$account = $_POST["account"];
$referral = $_POST["referral"];
$phone = $_POST["phone"];
$phone2 = $_POST["phone2"];
$country = $_POST["country"];
$refid = $_POST["refid"];
$city = $_POST["city"];
$gender = $_POST["gender"];
$channel = $_POST["channel"];
 //the amount in kobo. This value is actually NGN 300 

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
    'phone'=>$phone,
    'phone2'=>$phone2,
    'fname'=>$fname,
    'lname'=>$lname,
    'country'=>$country,
    'gender'=>$gender,
    'referral'=>$referral,
    'city'=>$city,
    'account'=>$account,
    'bank'=>$bank,
    'birthday'=>$birthday,
    'channel'=>$channel,
    'refid'=>$refid,
    'reference'=>$reference,
    'metadata' => [
      'custom_fields' => [
        [
          "display_name"=>"Referral ID",
          "variable_name"=>"refid",
          "value"=>$refid
        ],
        [
          "display_name"=>"Mobile Number",
        "variable_name"=>"phone",
        "value"=>$phone
        ],
       [
          "display_name"=>"Mobile Number 2",
          "variable_name"=>"phone2",
          "value"=>$phone2
        ],
        [
          "display_name"=>"First Name",
          "variable_name"=>"fname",
          "value"=>$fname
        ],
        [
          "display_name"=>"Last Name",
          "variable_name"=>"lname",
          "value"=>$lname
        ],
        [
          "display_name"=>"Country",
          "variable_name"=>"country",
          "value"=>$country
        ],
        [
          "display_name"=>"Sex",
          "variable_name"=>"gender",
          "value"=>$gender
        ],
        [
          "display_name"=>"Investors Referral",
          "variable_name"=>"referral",
          "value"=>$referral
        ],
        [
          "display_name"=>"City",
          "variable_name"=>"city",
          "value"=>$city
        ],
        [
          "display_name"=>"Investors Acct No",
          "variable_name"=>"account",
          "value"=>$account
        ],
        [
          "display_name"=>"Investors Bank",
          "variable_name"=>"bank",
          "value"=>$bank
        ],
        [
          "display_name"=>"DOB",
          "variable_name"=>"birthday",
          "value"=>$birthday
        ],
        [
          "display_name"=>"I Heard From",
          "variable_name"=>"channel",
          "value"=>$channel
        ],
      ]
   ]


  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_test_", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx['status']){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
print_r($tranx);
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);

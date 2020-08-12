<?php
// contact form submitted var and err var
$name  = $email = $waphone = $age = $recommend = $success= $country = $account = $bank = $comment ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }

if (empty($_POST["waphone"])) {
    $waphone_error = "Whatsapp number is required";
  } else {
    $waphone = test_input($_POST["waphone"]);
    // check if phone number is valid 
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $waphone)) {
      $waphone_error = "Invalid Whatsapp number, enter without '+234'";
    }
  }

  if (empty($_POST["age"])) {
    $age_error = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{2}/",$age)) {
      $age_error = "Only 2 digits allowed";
    }
  }

  if (empty($_POST["recommend"])) {
    $recommend = "";
  } else {
    $recomment = test_input($_POST["recommend"]);
  }

  if (empty($_POST["country"])) {
    $country_error = "country is required";
  } else {
    $name = test_input($_POST["country"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$country)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["account"])) {
    $account_error = "account number is required";
  } else {
    $account = test_input($_POST["account"]);
    // check if phone number is valid 
    if (!preg_match("/^[0-9]{14}/", $account)) {
      $account_error = "Invalid account number";
    }
  }

if (empty($_POST["bank"])) {
    $bank_error = "required";
  } else {
    $bank = test_input($_POST["bank"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$bank)) {
      $bank_error = "Only letters and white space allowed";
    }
  }

if (empty($_POST["atype"])) {
  $atype = "";
  } else {
    $atype = test_input($_POST["atype"]);
  }

  if (empty($_POST["comment"])) {
    $comment_error = "field is required";
  } else {
    $comment = test_input($_POST["comment"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$comment)) {
      $comment_error = "Too short, not less than 200 characters";
    }
  }

if( $name_error =='' and $waphone_error=='' and $email_error==''){
  $message_body ='';
  unset($_POST['submit']);
  foreach ($_POST as $key => $value) {
    $message_body .= "$key: $value\n";
  }

  $to = 'emmie.ben@live.com';
  $subject = 'Contact Form Submit';
  if (mail($to, $subject, $comment)){
    $success = "Message sent, thanks for contacting us!";
    $name = $phone = $email = $subject = $message = $success = '';
     }
  }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
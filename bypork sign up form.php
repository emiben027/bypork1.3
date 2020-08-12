<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template">
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

<?php include('brand_form_process.php'); ?>

<!-- php process -->
</head>

<body>


<div class="container">
  <header class="header">
    <h1 class="text-center" id="h11">Become A <strong class="ttm-textcolor-skincolor fw-600">Bypork</strong> Brand Rep</h1>
    <p>
      1 in 6 people living in Africa suffer protein deficiency in their diet. Considering Africa's 1.2B+ population, at least 200M people are affected.</p>

<p>BYPORK is an initiative to combat protein deficiency in Africa by engaging Africans in pig farming. We do this by offering people a secure platform to invest in pig farming, make huge returns on their investments and help the poor at the same time.</p>
                            <div>
                                <a href="index.php" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mt-20 text-center">Learn more</a>
                            </div>
<p></p>
<p>As a brand rep, you'd be part of a team working to tackle this huge problem. Asides the satisfaction of helping solve a huge problem, you'd also enjoy:</p>
<p></p>
<ol>
  <li><i class="fa fa-check-circle-o"></i> &nbsp;5% commission on every referral.</li>

  <li><i class="fa fa-check-circle-o"></i> &nbsp;Sales trainings to help build up and sharpen your selling skills.</li>

  <li><i class="fa fa-check-circle-o"></i> &nbsp;Opportunity to work closely in a startup.</li>
 <hr>
<p class="text-center"><?php echo date (" D M Y");?></p>
  </ol></header>
  <form id="survey-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div class="form-group">
      <label id="name-label">Full Name*</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="enter your full name" value="<?= $name ?>">
       <span class="error"><?= $name_error?></span>
    </div>
    <div class="form-group">
      <label id="email-label">Email*</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="@email.com" value="<?= $email ?>">
      <span class="error"><?= $email_error?></span>
    </div>
    <div class="form-group">
      <label id="email-label">Whatsapp Number*</label>
      <input name="waphone" type="text" placeholder="enter your whatsapp number" class="form-control" value="<?= $waphone ?>">
      <span class="error"><?= $waphone_error?></span>
    </div>
    <div class="form-group">
      <label id="name-label">Country*</label>
      <input type="text" name="country" id="country" class="form-control" placeholder="what is your country?" value="<?= $country ?>">
      <span class="error"><?= $country_error?></span>
    </div>
    <div class="form-group">
      <label id="number-label">Age*</label>
      <input type="text" name="age" id="number" min="10" max="70" class="form-control" placeholder="Age" value="<?= $age ?>">
      <span class="error"><?= $age_error?></span>
    </div>
    <div class="form-group">
      <p>Would you recommend our service to a friend?</p>
       <label>
        <input
          name="recommend"
          value="definitely"
          type="radio"
          class="input-radio"
          value="<?= $recommend ?>"
          checked
        />Yes</label
      >
      <label>
        <input
          name="recommend"
          value="maybe"
          type="radio"
          class="input-radio"
          value="<?= $recommend ?>"
        />Maybe</label
      >

      <label
        ><input
          name="recommend"
          value="not-sure"
          type="radio"
          class="input-radio"
          value="<?= $recommend ?>"
        />Not sure</label
      >
    <div class="form-group">
      <label id="name-label">Bank Details*</label>
      <input type="text" name="account" id="name" class="form-control" placeholder="enter your account number here" value="<?= $account ?>">
      <span class="error"><?= $account_error?></span>
      <dir></dir>
      <label>
      <input type="text" name="bank" id="name" class="form-control" placeholder="enter your banking institution" value="<?= $bank ?>"> 
      <span class="error"><?= $bank_error?></span>
    </label>
    </div>
    <div>
   <label>
        <input
          name="atype"
          value="definitely"
          type="radio"
          class="input-radio"
          checked
          value="<?= $atype ?>"
        />Savings</label
      >
      <label>
        <input
          name="atype"
          value="maybe"
          type="radio"
          class="input-radio"
          value="<?= $atype ?>"
        />Current</label
      >

    </div>
    <dir></dir>
    <div class="form-group">
      <p>Why do you want to join BYPORK?*</p>
      <textarea type="text" id="comments" class="input-textarea" name="comment" placeholder="not less than 200 characters" value="<?= $comment ?>"></textarea>
      <span class="error"><?= $comment_error?></span>
    </div>

    <div class="form-group">
      <button type="submit" id="submit" class="submit-button">
        Submit
      </button>
      <div>
      	<div class="success"><?= $success; ?></div>
      </div>
    </div>
    <hr>
    <a href="contact-us.php"><span id="help">Help!</span></a>
  </form>
</div>

<!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Copyright © <?php echo date ("Y");?>&nbsp;<a href="bypork.php">Bypork</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->



</body>
<?php


$refid="4";
function getName ($refid){
  $characters='12mnbvc456xzasd7fgh8jkp9iuyt3rewq';
  $randomString='';

  for ($i=0;$i<$refid;$i++){
    $index = rand(0,strlen($characters)-1);
    $randomString .=$characters[$index];
  }
  return $randomString;
}


if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LdwarsZAAAAAELxVVZLTvSwGAUJu3vI2DteHfEI';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   }


?>


<!DOCTYPE html>
<html lang="en">
<!-- bypork.com -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="BYPORK SAVE AFRICA MAKE LOTS OF MONEY">
<meta name="description" content="Bypork - Save Africa. Make Lots Of Money.">
<meta name="author" content="https://www.bypork.com/">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Bypork - Save Africa. Make Lots Of Money.</title>

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

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

  <li><i class="fa fa-check-circle-o"></i> &nbsp;Opportunity to work in a startup.</li>
 <hr>
<p class="text-center"><?php echo date (" D M Y");?></p>
  </ol></header>
  <form id="survey-form" method="post" action="rep-info.php">
   <div class="form-group">
      <label id="name-label">First Name*</label>
      <input type="text" name="fname" id="fname" class="form-control" placeholder="" value="" minlength="2" maxlength="20" size="20" pattern="[A-Za-z]{1,20}"  tittle="enter your first name" required>
    </div>
    <div class="form-group">
      <label id="name-label">Last Name*</label>
      <input type="text" name="lname" id="lname" class="form-control" placeholder="" value="" minlength="2" maxlength="20" size="20" pattern="[A-Za-z]{1,20}" required>
    </div>
    <div class="form-group">
      <label id="email-label">Email*</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="@email.com" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    </div>
    <div class="form-group">
      <label id="email-label">Whatsapp Number*</label>
      <input name="waphone" id="waphone" type="text" placeholder="+234" class="form-control" minlength="9" maxlength="13" size="14" required>
    </div>
    <div class="form-group">
      <label id="number-label">Age*</label>
      <input type="text" name="age" id="age" min="16" max="90" class="form-control" placeholder="18" value="" size="2" maxlength="2" required>
    </div>
    <div class="form-group">
      <p>Would you recommend our service to a friend?</p>
       <label>
        <input
          name="recommend"
          value="definitely"
          type="radio"
          class="input-radio"
          value=""
        />Yes</label
      >
      <label>
        <input
          name="recommend"
          value="maybe"
          type="radio"
          class="input-radio"
          value=""
        />Maybe</label
      >

      <label
        ><input
          name="recommend"
          value="not-sure"
          type="radio"
          class="input-radio"
          value=""
        />Not sure</label
      >
    <div class="form-group">
      <label id="name-label">Country*</label>     
            <select type="text" id="country" name="country" class="form-control" value="" required>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria" selected>Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
       
      </select> 
    <div class="form-group">
      <label id="name-label">City*</label>
      <input type="text" name="city" id="city" class="form-control" placeholder="" value="" minlength="2" maxlength="20" size="20" pattern="[A-Za-z]{1,20}" required>
    </div>
    <div>
    <dir></dir>
    <div class="form-group">
    <p>Why do you want to join BYPORK?*</p>
      <textarea type="text" id="comment" class="input-textarea" name="comment" placeholder="not less than 50 characters" minlength="50" size="200" value="" required></textarea>
    </div>
    <div class="form-group">
      <input type="hidden" name="refid" id="refid" class="form-control" placeholder="" value="<?php echo getName ($refid);?>"> 
    </div>
    <div class="g-recaptcha" data-sitekey="6LdwarsZAAAAAG3u4cp1YNguZFeZTc8QhaN8k-e3"></div>
      <br/>
    <div class="form-group">
      <button type="submit" id="next" name="next" class="submit-button">
        NEXT >>
      </button>
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


        <!--javascript-->



<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>



</body>
</html>
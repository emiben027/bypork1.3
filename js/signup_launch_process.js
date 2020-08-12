/* Javascript for form validation*/


// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var fname = document.sign-up-launch-promo.fname.value;
    var lname = document.sign-up-launch-promo.lname.value;
    var account = document.sign-up-launch-promo.account.value;
    var bank = document.sign-up-launch-promo.bank.value;
    var email = document.sign-up-launch-promo.email.value;
    var phone = document.sign-up-launch-promo.phone.value;
    var birthday = document.sign-up-launch-promo.birthday.value;
    var amount = document.sign-up-launch-promo.amount.value;
    var country = document.sign-up-launch-promo.country.value;
    var gender = document.sign-up-launch-promo.gender.value;
    var  = [];
    var checkboxes = document.getElementsByName("gender[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate hobbies array with selected values
            gender.push(checkboxes[i].value);
        }
    }

	// Defining error variables with a default value
    var fname_error = lname_error = email_error = phone_error = bank_error = account_error = birthday_error = gender_error = true;
    
    // Validate name
    if(fname == "") {
        printError("fname_error", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("fname_error", "Please enter a valid first name name");
        } else {
            printError("fname_error", "");
            fname_error = false;
        }
    }
    
    if(lname == "") {
        printError("lname_error", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lname) === false) {
            printError("lname_error", "Please enter a valid last name");
        } else {
            printError("lname_error", "");
            lname_error = false;
        }
    }

    // Validate email address
    if(email == "") {
        printError("email_error", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("email_error", "Please enter a valid email address");
        } else{
            printError("email_error", "");
            email_error = false;
        }
    }
    
    // Validate mobile number
    if(phone == "") {
        printError("phone_error", "Please enter your phone number");
    } else {
        var regex = /^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid phone number");
        } else{
            printError("phone_error", "");
            phone_error = false;
        }
    }
    
    if(account == "") {
        printError("account_error", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{14}$/;
        if(regex.test(account) === false) {
            printError("account", "Please enter a valid 10 to 16 digits account number");
        } else{
            printError("account", "");
            account_error = false;
        }
    }

    if(bank == "") {
        printError("bank_error", "Please enter your banking institution");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(bank) === false) {
            printError("bank_error", "Please enter only aphabets");
        } else {
            printError("bank_error", "");
            bank_error = false;
        }
    }

    if(birthday == "") {
        printError("birthday_error", "Please enter or select your birthday");
    }
    
    // Validate gender
    if(gender == "") {
        printError("gender_error", "Please select your gender");
    } else {
        printError("gender_error", "");
        gender_error = false;
    }
    


    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Gender: " + gender + "\n";
        if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};


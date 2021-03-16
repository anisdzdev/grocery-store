function register() { // function check the emails and passwords
    checkEmail(); // call checkEmail()
    checkPassword(); // call checkPassword

    if(checkEmail() == true && checkPassword() == true) // verify if emails and password are the same
        return true; // submit
    else return false; // don't submit
}

function checkEmail(){ // function to check the emails
    const emailUp = document.getElementById("emailUp").value; // get the value of the first email
    const confirmEmailUp = document.getElementById("confirmEmailUp").value; // get the email of the second email

    if (emailUp != confirmEmailUp) { // if they are different
        visible("errorConfirmEmail", "emailFas"); // call function visible
        return false; // don't submit
    }

    else if(emailUp == confirmEmailUp){ // if they are the same
        hidden("errorConfirmEmail", "emailFas"); // call function hidden
        return true; // submit
    }
}

function checkPassword(){ // function to check the passwords
    const passwordUp = document.getElementById("passwordUp").value; // get the first password
    const confirmPasswordUp = document.getElementById("confirmPasswordUp").value; // get the second password

    if (passwordUp != confirmPasswordUp) { // if they are different
        visible("errorConfirmPassword", "passwordFas"); // call function visible
        return false; // don't submit
    }

    else if(passwordUp == confirmPasswordUp){ // if they are the same
        hidden("errorConfirmPassword", "passwordFas"); // call function hidden
        return true; // submit
    }
}

function visible(error, fas){ // function to set the message visible with two parameters
    const small = document.getElementById(error); // get error message text
    const i = document.getElementById(fas); // get the error message icon
    small.style.visibility = "visible"; // set the error message text visible
    i.style.visibility = "visible"; // set the error message icon visible
}

function hidden(error, fas){ // function to set the message visible with two parameters
    const small = document.getElementById(error); // get error message text
    const i = document.getElementById(fas); // get the error message icon
    small.style.visibility = "hidden"; // set the error message text hidden
    i.style.visibility = "hidden"; // set the error message icon visible
}



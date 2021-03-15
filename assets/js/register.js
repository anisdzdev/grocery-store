function register() {
    checkEmail();
    checkPassword();

    if(checkEmail() == true && checkPassword() == true)
        return true;
    else return false;
}

function checkEmail(){
    const emailUp = document.getElementById("emailUp").value;
    const confirmEmailUp = document.getElementById("confirmEmailUp").value;

    if (emailUp != confirmEmailUp) {
        visible("errorConfirmEmail", "emailFas");
        return false;
    }

    else if(emailUp == confirmEmailUp){
        hidden("errorConfirmEmail", "emailFas");
        return true;
    }
}

function checkPassword(){
    const passwordUp = document.getElementById("passwordUp").value;
    const confirmPasswordUp = document.getElementById("confirmPasswordUp").value;

    if (passwordUp != confirmPasswordUp) {
        visible("errorConfirmPassword", "passwordFas");
        return false;
    }

    else if(passwordUp == confirmPasswordUp){
        hidden("errorConfirmPassword", "passwordFas");
        return true;
    }
}

function visible(error, fas){
    const small = document.getElementById(error);
    const i = document.getElementById(fas);
    small.style.visibility = "visible";
    i.style.visibility = "visible";
}

function hidden(error, fas){
    const small = document.getElementById(error);
    const i = document.getElementById(fas);
    small.style.visibility = "hidden";
    i.style.visibility = "hidden";
}



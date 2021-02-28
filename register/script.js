function checkSignUp() {
    var emailUp = document.getElementById("emailUp").value;
    var confirmEmailUp = document.getElementById("confirmEmailUp").value;

    var passwordUp = document.getElementById("passwordUp").value;
    var confirmPasswordUp = document.getElementById("confirmPasswordUp").value;

    if (emailUp != confirmEmailUp) {
        alert("Email didn't match try again.");
        return false;
    }

    if (passwordUp != confirmPasswordUp) {
        alert("Password didn't match try again.");
        return false;
    }
    else
        return true;
}

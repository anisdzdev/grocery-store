function displayMessage(){
    var myDiv = document.getElementById("recoveryForm");
    myDiv.remove();

    var para = document.createElement("p");
    var node = document.createTextNode("Thanks for submitting your email address. If this address exists, an email will be sent with instructions to reset your password. The email might take a couple of minutes to reach your account. Don't forget to check your spam folder!");
    var anchor = document.createElement("a");
    var node1 = document.createTextNode("Click here to Sign In.");
    para.append(node);
    anchor.append(node1);
    var element = document.getElementById("recovery-form");
    element.appendChild(para);
    element.appendChild(anchor);
    anchor.href = "signin.html";
    para.style.textAlign = "left";
}
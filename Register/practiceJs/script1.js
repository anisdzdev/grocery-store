document.write("Hello World" + "<br>");
var num1 = 10;
document.write(num1 + "<br>");
alert("Hello, World!");
var answer = confirm("Are you happy");
if (answer) {
    var level = prompt("Enter your level of happiness out of 10:");
    if (level >= 7)
        document.write("You are very happy");

    else if (level >= 4)
        document.write("You are happy");
    else
        document.write("You are not really that happy");
}
else
    document.write("no happy");

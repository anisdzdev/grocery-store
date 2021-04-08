<script>
function addUser(){

    // Creat all elements and set their respective attributes
    var tr1 = document.createElement("tr");
    var td1 = document.createElement("td");
    td1.setAttribute("id", "name");
    var td2 = document.createElement("td");
    td2.setAttribute("id", "email");
    var td3 = document.createElement("td");
    td3.setAttribute("id", "password");
    var td4 = document.createElement("td");

    //create the two buttons "Edit" and "Add" and set their respective attributes
    var butt1 = document.createElement("button");
    var butt2 = document.createElement("button");
    butt1.innerHTML = "Edit";
    butt1.setAttribute("type", "button");
    butt1.setAttribute("class", "btn btn-primary btn-sm");
    butt1.style.marginRight = "4px";
    butt2.innerHTML = "Remove";
    butt2.setAttribute("onclick", "deleteRow($(this))");
    butt2.setAttribute("type", "button");
    butt2.setAttribute("class", "btn btn-danger btn-sm");

    // Create an a tag and set its attribute
    var aTag = document.createElement("a");
    aTag.setAttribute("href", "product-user.php");

    // Create a new text node for each of the variables for the users
    var name = document.createTextNode(<?php echo 'amin'?>);
    var email = document.createTextNode(<?php echo 'amin' ?>);
    var password = document.createTextNode(<?php echo 'amin' ?>);

    // Append child all the variables inside of their respective td that we created earlier
    td1.appendChild(name);
    td2.appendChild(email);
    td3.appendChild(password);

    td4.appendChild(aTag);
    aTag.appendChild(butt1);
    td4.appendChild(butt2);

    tr1.appendChild(td1);
    tr1.appendChild(td2);
    tr1.appendChild(td3);
    tr1.appendChild(td4);

    // Create a tbody by his id
    var tbody = document.getElementById("tbody");

    // Append child everything inside of the tbody tag
    tbody.appendChild(tr1);

}
</script>



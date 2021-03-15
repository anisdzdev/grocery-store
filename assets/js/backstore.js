// onload.initialize();
var orders = ['12345AB','71412AB'];

// function initialize(){
//     if ()
// }






function deleteRow(row){
    row.closest('tr').remove();
}

function checkOrderMatch(){
    orderInput = $("#order-number").val();

    if (!(/[0-9]{5}[A-Za-z]{2}/g.test(orderInput))){
        alert("Order format is incorrect, please try again.")
        return;
    }

    for (i=0; i<orders.length; i++) {
        if (orderInput != orders[i]) {
            alert("Unknown order. Please check your order number and try again.")
            break;
        } else if (orderInput == orders[i]) {
            $("#form-contact-body").text("Thank you for contacting us. Our team will be in touch as soon as possible!")
            break;
        }
    }
}



function edit() {
    var name1 = document.getElementById("name").value;
    var proDes1 = document.getElementById("proDes").value;
    var price1 = document.getElementById("price").value;
    var aisle1 = document.getElementById("aisle");
    var aisleSelect = aisle1.options[aisle1.selectedIndex].value;

    var name = document.getElementById("name");
    var proDes = document.getElementById("proDes");
    var price = document.getElementById("price");
    var aisle = document.getElementById("aisle");

    name.innerHtml = name1;
    proDes.innerHtml = proDes1;
    price.innerHtml = price1;
    aisle.innerHtML = aisleSelect;



}
function addProduct(){


    var tr1 = document.createElement("tr");
    var td1 = document.createElement("td");
    td1.setAttribute("id", "name");
    var td2 = document.createElement("td");
    td2.setAttribute("id", "proDes");
    var td3 = document.createElement("td");
    td3.setAttribute("id", "price");
    var td4 = document.createElement("td");
    td4.setAttribute("id", "aisle")
    var td5 = document.createElement("td");


    var butt1 = document.createElement("button");
    var butt2 = document.createElement("button");


    butt1.innerHTML = "Edit";
    butt1.setAttribute("type", "button");
    butt1.setAttribute("class", "btn btn-primary btn-sm")
    butt2.innerHTML = "Remove";
    butt2.setAttribute("onclick", "deleteRow($(this))");
    butt2.setAttribute("type", "button");
    butt2.setAttribute("class", "btn btn-danger btn-sm");

    var aTag = document.createElement("a");

    aTag.setAttribute("href", "product-save.html");

     var name = document.createTextNode("name");

     var proDes = document.createTextNode("description");
     var price = document.createTextNode("price");
     var aisle = document.createTextNode("aisle");

    td1.appendChild(name);
    td2.appendChild(proDes);
    td3.appendChild(price);
    td4.appendChild(aisle);

    td5.appendChild(aTag);
    aTag.appendChild(butt1);
    td5.appendChild(butt2);

    tr1.appendChild(td1);
    tr1.appendChild(td2);
    tr1.appendChild(td3);
    tr1.appendChild(td4);
    tr1.appendChild(td5);

    var tbody = document.getElementById("tbody");
    tbody.appendChild(tr1);



    edit();

}
function addOrder(){


    var tr1 = document.createElement("tr");
    var td1 = document.createElement("td");
    td1.setAttribute("id", "buyerName");
    var td2 = document.createElement("td");
    td2.setAttribute("id", "total");
    var td3 = document.createElement("td");
    td3.setAttribute("id", "status");
    var td4 = document.createElement("td");
    td4.setAttribute("id", "order#")
    var td5 = document.createElement("td");


    var butt1 = document.createElement("button");
    var butt2 = document.createElement("button");
    butt1.innerHTML = "Edit";
    butt1.setAttribute("type", "button");
    butt1.setAttribute("class", "btn btn-primary btn-sm")
    butt2.innerHTML = "Remove";
    butt2.setAttribute("onclick", "deleteRow($(this))");
    butt2.setAttribute("type", "button");
    butt2.setAttribute("class", "btn btn-danger btn-sm");


    var aTag = document.createElement("a");
    aTag.setAttribute("href", "product-order.html");

    var buyerName = document.createTextNode("Buyer Name");
    var total = document.createTextNode("Total");
    var status = document.createTextNode("Status");
    var orderNum = document.createTextNode("Order #");

    td1.appendChild(buyerName);
    td2.appendChild(total);
    td3.appendChild(status);
    td4.appendChild(orderNum);

    td5.appendChild(aTag);
    aTag.appendChild(butt1);
    td5.appendChild(butt2);

    tr1.appendChild(td1);
    tr1.appendChild(td2);
    tr1.appendChild(td3);
    tr1.appendChild(td4);
    tr1.appendChild(td5);

    var tbody = document.getElementById("tbody");
    tbody.appendChild(tr1);



    edit();



}
function addUser(){


    var tr1 = document.createElement("tr");
    var td1 = document.createElement("td");
    td1.setAttribute("id", "fullName");
    var td2 = document.createElement("td");
    td2.setAttribute("id", "orders");
    var td3 = document.createElement("td");
    td3.setAttribute("id", "totOrderAmount");
    var td4 = document.createElement("td");


    var butt1 = document.createElement("button");
    var butt2 = document.createElement("button");
    butt1.innerHTML = "Edit";
    butt1.setAttribute("type", "button");
    butt1.setAttribute("class", "btn btn-primary btn-sm")
    butt2.innerHTML = "Remove";
    butt2.setAttribute("onclick", "deleteRow($(this))");
    butt2.setAttribute("type", "button");
    butt2.setAttribute("class", "btn btn-danger btn-sm");


    var aTag = document.createElement("a");
    aTag.setAttribute("href", "product-user.html");

    var fullName = document.createTextNode("Full Name");
    var orders = document.createTextNode("Orders");
    var totOrderAmount = document.createTextNode("TotalOrderAmount");


    td1.appendChild(fullName);
    td2.appendChild(orders);
    td3.appendChild(totOrderAmount);

    td4.appendChild(aTag);
    aTag.appendChild(butt1);
    td4.appendChild(butt2);

    tr1.appendChild(td1);
    tr1.appendChild(td2);
    tr1.appendChild(td3);
    tr1.appendChild(td4);

    var tbody = document.getElementById("tbody");
    tbody.appendChild(tr1);

    edit();

}




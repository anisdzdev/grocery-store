
var orders = ['12345AB','71412AB'];

// deletes row on click
function deleteRow(row){
    row.closest('tr').remove();
}

// checks if the order enter corresponds to an order in the backstore.
function checkOrderMatch(){

    // grabs order entered.
    orderInput = $("#order-number").val();

    //  checks if order entered corresponds to the format.
    if (!(/[0-9]{5}[A-Za-z]{2}/g.test(orderInput))){
        alert("Order format is incorrect, please try again.")
        return;
    }


    // checks if a match is found and responds accordingly.
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



function editProduct() {
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
function editUser() {
    var fullName1 = document.getElementById("fullName").value;
    var orders1 = document.getElementById("orders").value;
    var totOrderAmount1 = document.getElementById("totOrderAmount").value;


    var fullName = document.getElementById("fullName");
    var orders = document.getElementById("orders");
    var totOrderAmount = document.getElementById("totOrderAmount");


    fullName.innerHtml = fullName1;
    orders.innerHtml = orders1;
    totOrderAmount.innerHtml = totOrderAmount1;

}
function editOrder() {
    var buyerName1 = document.getElementById("buyerName").value;
    var total1 = document.getElementById("total").value;
    var status1 = document.getElementById("status").value;
    var orderNum1 = document.getElementById("order#");


    var buyerName = document.getElementById("buyerName");
    var total = document.getElementById("total");
    var status = document.getElementById("status");
    var orderNum = document.getElementById("order#");

    buyerName.innerHtml = buyerName1;
    total.innerHtml = total1;
    status.innerHtml = status1;
    orderNum.innerHtML = orderNum1;


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

    editProduct();

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

    editOrder();

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

    editUser();

}




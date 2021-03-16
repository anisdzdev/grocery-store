
    var orders = JSON.parse(localStorage.getItem("order-number-array"));
    console.log(orders)





var word = $(".number").text();


// deletes row on click
function deleteRow(row){
    row.closest('tr').remove();
}

// checks if the order enter corresponds to an order in the backstore.
function checkOrderMatch(){


    // grabs order entered.
    orderInput = $("#order-number").val();

    //checks if order is empty.
    if(orderInput == "")
        return;

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


// edit function for the product
function editProduct() {

    // get the new value of each element by their id
    var name1 = document.getElementById("name").value;
    var proDes1 = document.getElementById("proDes").value;
    var price1 = document.getElementById("price").value;
    var aisle1 = document.getElementById("aisle").value;

    // get each element of the product list by their id
    var name = document.getElementById("name");
    var proDes = document.getElementById("proDes");
    var price = document.getElementById("price");
    var aisle = document.getElementById("aisle");

    // change the old value of the element by the new one
    name.innerHtml = name1;
    proDes.innerHtml = proDes1;
    price.innerHtml = price1;
    aisle.innerHtML = aisle1;


}
// edit function for the user
function editUser() {

    // get the new value of each element by their id
    var fullName1 = document.getElementById("fullName").value;
    var orders1 = document.getElementById("orders").value;
    var totOrderAmount1 = document.getElementById("totOrderAmount").value;

    // get each element of the product list by their id
    var fullName = document.getElementById("fullName");
    var orders = document.getElementById("orders");
    var totOrderAmount = document.getElementById("totOrderAmount");

    // change the old value of the element by the new one
    fullName.innerHtml = fullName1;
    orders.innerHtml = orders1;
    totOrderAmount.innerHtml = totOrderAmount1;

}
// edit function for the order
function editOrder() {

    // get the new value of each element by their id
    var buyerName1 = document.getElementById("buyerName").value;
    var total1 = document.getElementById("total").value;
    var status1 = document.getElementById("status").value;
    var orderNum1 = document.getElementById("order#").value;

    // get each element of the product list by their id
    var buyerName = document.getElementById("buyerName");
    var total = document.getElementById("total");
    var status = document.getElementById("status");
    var orderNum = document.getElementById("order#");

    // change the old value of the element by the new one
    buyerName.innerHtml = buyerName1;
    total.innerHtml = total1;
    status.innerHtml = status1;
    orderNum.innerHtML = orderNum1;


}
//Add function for the product
function addProduct(){

    // Creat all elements and set their respective attributes
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

    //create the two buttons "Edit" and "Add" and set their respective attributes
    var butt1 = document.createElement("button");
    var butt2 = document.createElement("button");
    butt1.innerHTML = "Edit";
    butt1.setAttribute("type", "button");
    butt1.setAttribute("class", "btn btn-primary btn-sm")
    butt1.style.marginRight = "4px";
    butt2.innerHTML = "Remove";
    butt2.setAttribute("onclick", "deleteRow($(this))");
    butt2.setAttribute("type", "button");
    butt2.setAttribute("class", "btn btn-danger btn-sm");

    // Create an a tag and set its attribute
    var aTag = document.createElement("a");
    aTag.setAttribute("href", "product-save.html");

    // Create a new text node for each of the variables for the products
     var name = document.createTextNode("name");
     var proDes = document.createTextNode("description");
     var price = document.createTextNode("price");
     var aisle = document.createTextNode("aisle");

     // Append child all the variables inside of their respective td that we created earlier
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

    // Create a tbody by his id
    var tbody = document.getElementById("tbody");

    // Append child everything inside of the tbody tag
    tbody.appendChild(tr1);

}
//Add function for the order
function addOrder(){

    // Creat all elements and set their respective attributes
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
    aTag.setAttribute("href", "product-order.html");

    // Create a new text node for each of the variables for the orders
    var buyerName = document.createTextNode("Buyer Name");
    var total = document.createTextNode("Total");
    var status = document.createTextNode("Status");
    var orderNum = document.createTextNode("Order #");

    // Append child all the variables inside of their respective td that we created earlier
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

    // Create a tbody by his id
    var tbody = document.getElementById("tbody");

    // Append child everything inside of the tbody tag
    tbody.appendChild(tr1);

}
//Add function for the user
function addUser(){

    // Creat all elements and set their respective attributes
    var tr1 = document.createElement("tr");
    var td1 = document.createElement("td");
    td1.setAttribute("id", "fullName");
    var td2 = document.createElement("td");
    td2.setAttribute("id", "orders");
    var td3 = document.createElement("td");
    td3.setAttribute("id", "totOrderAmount");
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
    aTag.setAttribute("href", "product-user.html");

    // Create a new text node for each of the variables for the users
    var fullName = document.createTextNode("Full Name");
    var orders = document.createTextNode("Orders");
    var totOrderAmount = document.createTextNode("TotalOrderAmount");

    // Append child all the variables inside of their respective td that we created earlier
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

    // Create a tbody by his id
    var tbody = document.getElementById("tbody");

    // Append child everything inside of the tbody tag
    tbody.appendChild(tr1);

}




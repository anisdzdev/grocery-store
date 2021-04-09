window.onload = initialize()

function initialize(){
    updateTable();
}


function updateTable(){
    console.log("loading");
    var ordersArray2 = JSON.parse(localStorage.getItem('orders-array'));
    for(let i=0; i<ordersArray2.length; i++){
        // Creat all elements and set their respective attributes
        var tr1 = document.createElement("tr");
        var td1 = document.createElement("td");
        td1.setAttribute("id", "buyerName");
        var td2 = document.createElement("td");
        td2.setAttribute("id", "total");
        var td3 = document.createElement("td");
        td3.setAttribute("id", "status");
        var td4 = document.createElement("td");
        td4.setAttribute("id", "orderNum")
        var td5 = document.createElement("td");

//create the two buttons "Edit" and "Add" and set their respective attributes
        var butt1 = document.createElement("button");
        var butt2 = document.createElement("button");
        butt1.innerHTML = "Edit";
        butt1.setAttribute("type", "button");
        butt1.setAttribute("class", "btn btn-primary btn-sm");
        butt1.style.marginRight = "4px";
        butt2.innerHTML = "Remove";
        butt2.setAttribute("onclick", "deleteRowOrder($(this))");
        butt2.setAttribute("type", "button");
        butt2.setAttribute("class", "btn btn-danger btn-sm");

// Create an a tag and set its attribute
        var aTag = document.createElement("a");
        aTag.setAttribute("href", "order-save.php");

// Create a new text node for each of the variables for the orders
        var buyerName = document.createTextNode(ordersArray2[i].name);
        var total = document.createTextNode(ordersArray2[i].total);
        var status = document.createTextNode(ordersArray2[i].status);
        var orderNum = document.createTextNode(ordersArray2[i].orderNum);

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
        var tbody = document.getElementById("tbodyorder");

// Append child everything inside of the tbody tag
        tbody.appendChild(tr1);
    }
}

// deletes row on click
function deleteRow(row){
    row.closest('tr').remove();

}

function deleteRowOrder(row){
    var array = JSON.parse(localStorage.getItem('orders-array'));
    var number = row.closest('tr').find("#orderNum").text();
    console.log(number);
    for (var i=0; i<array.length; i++){
        if(array[i].orderNum === number){
            console.log(array[i]);
            array.pop(array[i]);
            localStorage.setItem('orders-array', JSON.stringify(array));
        }
    }

    row.closest('tr').remove();

}


// checks if the order enter corresponds to an order in the backstore.
function checkOrderMatch(){

    var numbersArray = JSON.parse(localStorage.getItem('orders-array'));
    console.log(numbersArray)

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
    for (i=0; i<numbersArray.length; i++) {
        if (orderInput != numbersArray[i].orderNum) {
            alert("Unknown order. Please check your order number and try again.")
            break;
        } else if (orderInput == numbersArray[i].orderNum) {

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
    var orderNum1 = document.getElementById("orderNum").value;

    //--------------------ADD ORDER TO LOCAL STORAGE--------------------//

    //create a JSON object of order
    var object = {
        name: buyerName1,
        total: total1,
        status: status1,
        orderNum: orderNum1
    }

    //if the array does not exist in local storage, create an array and push the item in it as first element
    if(localStorage.getItem('orders-array')=== null){
        console.log(1);
        let myArray = [];
        myArray.push(object);
        localStorage.setItem('orders-array', JSON.stringify(myArray));
    }

    //if array already exists
    else {

        var ordersArray = JSON.parse(localStorage.getItem('orders-array')); //get the array from local storage



        //go through the array and and find if ordernumber exists, if so, edit it and get out of the function
        for(var i=0; i<ordersArray.length; i++){
            console.log(ordersArray[i]);
            if(ordersArray[i].orderNum == orderNum1){
                ordersArray[i].name = buyerName1;
                ordersArray[i].total = total1;
                ordersArray[i].status = status1;
                localStorage.setItem('orders-array', JSON.stringify(ordersArray));
                return;
            }
        }

        //if order number does not exist, add it as new element
        console.log("about to push " + object);
        ordersArray.push(object);
        localStorage.setItem('orders-array', JSON.stringify(ordersArray));

    }

    //--------------------ADD ORDER TO LOCAL STORAGE--------------------//

    // get each element of the product list by their id
    var buyerName = document.getElementById("buyerName");
    var total = document.getElementById("total");
    var status = document.getElementById("status");
    var orderNum = document.getElementById("orderNum");

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
    td4.setAttribute("id", "orderNum")
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
    aTag.setAttribute("href", "user-save.php");

    // Create a new text node for each of the variables for the users
    var name = document.createTextNode("Name");
    var email = document.createTextNode("Email");
    var password = document.createTextNode("Password");

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




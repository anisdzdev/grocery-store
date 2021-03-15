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
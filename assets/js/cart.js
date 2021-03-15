let subtotal_value = 0;
let taxes_value = 0;
let total_value = 0;

function displayTotal() {
    let subtotal = document.getElementById('subtotal')
    let taxes = document.getElementById('taxes')
    let total = document.getElementById('total')
    calculateTotal();
    subtotal.innerText = "$" + subtotal_value.toFixed(2);
    taxes.innerText = "$" + taxes_value.toFixed(2);
    total.innerText = "$" + total_value.toFixed(2);
}

function calculateTotal() {
    let prices = document.getElementsByClassName('element-price');
    subtotal_value = 0;
    for (let i = 0; i < prices.length; i++) {
        let value = prices[i].textContent.substr(1, prices[i].textContent.length);
        subtotal_value += parseFloat(value);
    }
    taxes_value = subtotal_value * 0.15;
    total_value = subtotal_value + taxes_value;
}

function removeElement(e) {
    e.parentElement.parentElement.parentElement.remove();
    displayTotal();
    displayNumberOfItems();
}

function changeCount(e) {
    let isPlus = true;
    if(e.getAttribute('name') === "minus")
        isPlus = false;

    let number = e.parentElement.querySelector('.number-selector')
    let unitary = e.parentElement.querySelector('input[name="unitary"]')
    let price = e.parentElement.parentElement.querySelector('span[name="price"]')

    if(number.value === "1" && !isPlus) return;
    if(number.value === "9" && isPlus) return;

    number.value = (isPlus) ? (parseInt(number.value)+1): (parseInt(number.value)-1);
    price.textContent = "$" + (parseFloat(unitary.value) * number.value).toFixed(2);
    displayTotal();
}

function checkCheckout(){
    let card_number = document.getElementById("card-number");
    let card_holder = document.getElementById("card-holder");
    let expires = document.getElementById("expires");
    let cvc = document.getElementById("cvc");

    if(card_number.value.length !== 16){
        card_number.style = "border: solid red";
    }else {
        card_number.style = "border: none";
    }
    if(card_holder.value.length < 5){
        card_holder.style = "border: solid red";
    }else {
        card_holder.style = "border: none";
    }
    if(!/^(0[1-9]|1[0-2])\/([0-9]{2})$/g.test(expires.value)){
        expires.style = "border: solid red";
    }else {
        expires.style = "border: none";
    }
    if(cvc.value.length !== 3){
        cvc.style = "border: solid red";
    }else {
        cvc.style = "border: none";
    }
}

function displayNumberOfItems(){
    let items = document.getElementsByClassName('uk-card full-width uk-card-default')
    let numOfItems = document.getElementById('number-of-items');
    numOfItems.innerText = items.length + " item" + ((items.length!==1) ? 's' : '');
}

displayTotal();
displayNumberOfItems();
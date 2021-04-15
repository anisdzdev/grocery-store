$( document ).ready(function() {
    let inputObject = document.getElementById("input");
    var productName = $("#title").text();
    let e;
    var value = 1;

    var price = parseFloat($("#productPrice").text());
    var totalPrice = parseFloat(value)*price;
    var estPrice = "estimated total : $" + totalPrice;

    console.log(productName);

    $(".plus").on("click",function(e){
        value++;
        console.log(value);
        document.getElementById("input").value = value;


        price = parseFloat($("#productPrice").text());
        totalPrice = parseFloat(value)*price;
        estPrice = "estimated total : $" + totalPrice.toFixed(2);

        $("#change").html(estPrice);
        console.log(estPrice);

    })

    $(".minus").on("click", function(e){
        if(value === 0){
            value = 0
            document.getElementById("input").value = value;
            $("#change").html("estimated total : $0.00");
            console.log("estimated total : $0.00")
        }
        else{
            value--;
            document.getElementById("input").value = value;

            price = parseFloat($("#productPrice").text());
            totalPrice = parseFloat(value)*price;
            estPrice = "estimated total : $" + totalPrice.toFixed(2);

            $("#change").html(estPrice);
            console.log(estPrice);

        }
        console.log(value);
    })

    $(".add").on("click", function(){

        $.ajax(
            '../../cart/updateCart.php',
            {
                type: "POST",
                data: {
                    action: "set",
                    value: value,
                    id: $("#id").text()
                },
                success: function(data) {
                },
                error: function() {
                }
            }
        );
        var text = "Added " + value + " " + productName +" to the cart!";
        swal({
            title : 'Success',
            text : text,
            icon: 'success',
            // buttons: ["Continue shopping", "Go to cart"],
            buttons: {
                cancel: "Continue shopping",
                defeat: 'Go to cart',
            },
        })
            .then((value) => {
                switch (value) {

                    case "defeat":

                        $.ajax({

                            url:"../../cart/cart.php",

                            success:function(data)
                            {
                                location.href='../../cart/cart.php';
                            }
                        })
                        break;

                    case "cancel":
                        break;
                }
            })
    })
});
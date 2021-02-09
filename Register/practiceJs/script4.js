x = findMax(1, 123, 500, 125, 44, 88)
    function findMax(){
        var i;
        max = 0;
        for(i = 0; i < arguments.length; i++){
            if(arguments[i] > max)
            max = arguments[i];
        }
        return max;
    }
document.write(x + "<br>");


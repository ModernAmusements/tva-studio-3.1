
var $ = require("jquery");

$(function() {
    if (document.getElementById("disabled").hasAttribute('disabled')) {
        document.getElementById("disabled").innerHTML = "Sold Out";
        $("#disabled").toggleClass('disabled');
        $("#productCard").css('opacity', '0.6');
    }
   else {
        document.getElementById("disabled").innerHTML = "In den Warenkorb";
        $("#disabled").removeClass('disabled');
        $("#productCard").css('opacity', '1');
    }
});






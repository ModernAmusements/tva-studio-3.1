$(document).ready(function() {
    if (document.getElementById("addToCart").disabled = true) {
        document.getElementById("addToCart").innerHTML = "Sold Out";
        $("#addToCart").addClass('disabled');
        $("#productCard").css('opacity', '0.6');
    }
});



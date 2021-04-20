$(function() {
    if (!sessionStorage.getItem("homePagePreloader")) {
         sessionStorage.setItem('homePagePreloader', true);
        $("body").addClass("animation");
        $("#preload-homepage")
            .addClass("loaded")
            .scrollTop(0);

        setTimeout(function() {
            $("#preload-homepage").addClass("out-fade");
        }, 2300);

        setTimeout(function() {
            $("#preload-homepage")
                .removeClass("loaded")
                .removeClass("out-fade")
                .css("display", "none");
            $("#app").addClass("fade-up");
            $("header").addClass("fade-up");
            $("#header-bottom").addClass("fade-up");
        }, 3900);

    } else {
        $("body").removeClass("animation");
        $("#preload-homepage").css("display", "none");
        setTimeout(function() {
            $("header").addClass("fade-up");
            $("#app").addClass("fade-up");
            $("#header-bottom").addClass("fade-up");
        }, 10);
    }
});



$(function() {
    if (!sessionStorage.getItem("pageLoader")) {
        // sessionStorage.setItem('homePagePreloader', true);
        $("#preload-homepage").addClass("loading");
        $("body").removeClass("animation");
        setTimeout(function() {
            $("#page-loader").css("display", "none");
        }, 1750);
    }
    else {
        $("#preload-homepage").addClass("loading");
    }
});
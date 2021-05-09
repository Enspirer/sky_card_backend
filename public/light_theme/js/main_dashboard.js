$(document).ready(function () {

    // ---------------------------- Search --------------------
    var search_status = 0;
    $("#btn-search").click(function () {
        if (search_status == 0) {
            $(".latest-connections").hide();
            $(".populer-connections").hide();
            $("#search-result").removeClass("display-none");

            $(".industry").removeClass("display-none");
            $(".industry-option").removeClass("display-none");
            $(".industry-search").removeClass("display-none");

            $("#search").removeClass("width-sm");
            $("#search-filter").removeClass("display-none");
            $("#btn-search").removeClass("fa-search");
            $("#search").addClass("width-lg");
            $("#btn-search").addClass("fa-chevron-right");
            $(".search-text").addClass("display-none");
            search_status = 1;
        } else {
            $(".latest-connections").show();
            $(".populer-connections").show();
            $("#search-result").addClass("display-none");

            $(".industry").addClass("display-none");
            $(".industry-option").addClass("display-none");
            $(".industry-search").addClass("display-none");

            $("#search").removeClass("width-lg");
            $("#search-filter").addClass("display-none");
            $("#btn-search").removeClass("fa-chevron-right");
            $("#search").addClass("width-sm");
            $("#btn-search").addClass("fa-search");
            $(".search-text").removeClass("display-none");
            search_status = 0;
        }
    });

    //   ------------------- Card Expand --------------
    var card_status = 0;
    $("#card-expand").click(function () {
        if (card_status == 0) {
            $("#card-drop-icon").addClass("fa-chevron-up");
            $("#card-drop-icon").removeClass("fa-chevron-down");
            $(".contact-details").removeClass("d-none");
            card_status = 1;
        } else {
            $("#card-drop-icon").addClass("fa-chevron-down");
            $("#card-drop-icon").removeClass("fa-chevron-up");
            $(".contact-details").addClass("d-none");
            card_status = 0;
        }
    });

    // ------------- Drop Down -----------------
    var dopd_btn = 0;
    $("#dopd-btn").click(function () {
        if (dopd_btn == 0) {
            $("#dropd").removeClass("d-none");
            dopd_btn = 1;
        } else {
            $("#dropd").addClass("d-none");
            dopd_btn = 0;
        }
    });

    // --------------- Profile Drop Down --------------
    var profile_drop = 0;
    $("#login-user").click(function () {
        if (profile_drop == 0) {
            $("#dropdown-login").removeClass("d-none");
            profile_drop = 1;
        } else {
            $("#dropdown-login").addClass("d-none");
            profile_drop = 0;
        }
    });

    // ------------------ Right Fixed -------------

    $(window).scroll(function () {
        var sc = $(window).scrollTop();
        if (sc > 1300) {
            $("#right-holder").addClass("b-259");
        } else {
            $("#right-holder").removeClass("b-259");
        }
    });


});
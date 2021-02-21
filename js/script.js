$(document).ready(function () {
    // THEME SELECTOR
    var theme = $("#theme");
    $("#spring").click(function () {
        theme.attr("href", "../css/themes/spring.css");
    });

    $("#summer").click(function () {
        theme.attr("href", "../css/themes/summer.css");
    });

    $("#autumn").click(function () {
        theme.attr("href", "../css/themes/autumn.css");
    });

    $("#winter").click(function () {
        theme.attr("href", "../css/themes/winter.css");
    });

    // TOGGLER THEME SELECTOR
    var toggler = $("#toggler");
    var aside_bar = $("#theme-changer");
    var aside_status = false;
    toggler.click(function (e) {
        if (aside_status) {
            aside_bar.animate({"left":"-60px"}, 300);
            aside_status = !aside_status;
            toggler.html(">");
        } else { 
            aside_bar.animate({"left":"0px"}, 300);
            aside_status = !aside_status;
            toggler.html("<");
        }
    });

    // SLIDER
    $('.bxslider').bxSlider({
        mode: 'fade',
        auto: true,
        responsive: true,
        pager: false,
        controls: false
    });

});
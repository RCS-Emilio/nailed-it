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
            aside_bar.animate({
                "left": "-60px"
            }, 300);
            aside_status = !aside_status;
            toggler.html(">");
        } else {
            aside_bar.animate({
                "left": "0px"
            }, 300);
            aside_status = !aside_status;
            toggler.html("<");
        }
    });

    // SLIDER
    $('.bxslider').bxSlider({
        mode: 'fade',
        auto: true,
        pager: false,
        controls: false,
        pause: 2000
    });

    // Only available on that site
    if (window.location.pathname == '/nailed-it/php/schedule.php') {
        //SCHEDULE SWIPER (RIGTH)
        $("#swipe-right").click(function (e) {
            //Current day (the one shown);
            var active_day = $(".active");

            //Condition when it reaches the end. (jump to Monday)
            if (active_day.next(".day").length != 0) {
                var next_day = active_day.next(".day");
            } else {
                var next_day = $(".day:first");
            }

            //Do animation
            active_day
                .animate({
                    right: "-100%"
                }, {
                    duration: 300
                })
                .animate({
                    opacity: "0"
                }, {
                    duration: 300,
                    queue: false,
                    complete: function () {
                        active_day.removeClass("active");
                        active_day.addClass("hidden");
                        active_day.css({
                            "right": "",
                            "opacity": "",
                        });

                        next_day.removeClass("hidden");
                        next_day.css({
                            "right": "100%",
                            "opacity": "0",
                        });

                        next_day
                            .animate({
                                right: "0"
                            }, {
                                duration: 300
                            })
                            .animate({
                                opacity: "1"
                            }, {
                                duration: 300,
                                queue: false,
                                complete: function () {
                                    next_day.addClass("active");
                                    next_day.css({
                                        "right": "",
                                        "opacity": "",
                                    });
                                }
                            });
                    }
                });
        });

        //SCHEDULE SWIPER (LEFT)
        $("#swipe-left").click(function (e) {
            var active_day = $(".active");

            if (active_day.prev(".day").length != 0) {
                var prev_day = active_day.prev(".day");
            } else {
                var prev_day = $(".day:last");
            }

            //Do animation
            active_day
                .animate({
                    left: "-100%"
                }, {
                    duration: 300
                })
                .animate({
                    opacity: "0"
                }, {
                    duration: 300,
                    queue: false,
                    complete: function () {
                        active_day.removeClass("active");
                        active_day.addClass("hidden");
                        active_day.css({
                            "left": "",
                            "opacity": ""
                        });

                        prev_day.removeClass("hidden");
                        prev_day.addClass("active");
                        prev_day.css({
                            "left": "100%",
                            "opacity": "0"
                        });


                        prev_day
                            .animate({
                                left: "0",
                            }, {
                                duration: 300
                            })
                            .animate({
                                opacity: "1"
                            }, {
                                duration: 300,
                                queue: false,
                                complete: function () {
                                    prev_day.css({
                                        "left": "",
                                        "opacity": "",
                                    });
                                }
                            });
                    }
                });


        });
    }

    // Only available on that site
    if (window.location.pathname == '/nailed-it/php/academy.php') {
        mapboxgl.accessToken = 'pk.eyJ1Ijoiam9zZXBlMDQxMSIsImEiOiJja2xreXZoN3cwam80MndwMnR4aW93M2N3In0.uBhapBnjS8pRyptBrq0M0w';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [12.550343, 55.665957],
            zoom: 18
        });

        var marker = new mapboxgl.Marker()
            .setLngLat([12.550343, 55.665957])
            .addTo(map);
    }


});
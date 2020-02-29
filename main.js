//https://codepen.io/jagadeshanh/pen/pNqLYX
function openSideNav() {
    //    document.getElementById("ben").classList.toggle("change");
    document.getElementById("mySidenav").classList.toggle("openclose");
}


function closeSideNav() {
    //    document.getElementById("ben").classList.toggle("change");
    document.getElementById("mySidenav").classList.toggle("openclose");
}


$(document).ready(function () {
    // Set iframe attributes when the show instance method is called
    $("#videoModal").on("show.bs.modal", function (event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let url = button.data("video"); // Extract url from data-video attribute

        $(this).find("iframe").attr({
            src: url,
            allow: "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        });
    });

    // Remove iframe attributes when the modal has finished being hidden from the user
    $("#videoModal").on("hidden.bs.modal", function () {
        $("#videoModal iframe").removeAttr("src allow");
    });
});


$(document).ready(function () {
    $('.slickcarousel').slick({
        dots: false,
        infinite: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
//                    slidesToShow: 5,
                //                    slidesToScroll: 5,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
//                    slidesToShow: 2,
//                    slidesToScroll: 2,
                    dots: true,

                }
            },
            {
                breakpoint: 480,
                settings: {
//                    slidesToShow: 1,
//                    slidesToScroll: 1,
                    dots: true,

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        smartSpeed: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            900: {
                items: 3,
                nav: false
            }
        }

    });
});

mybutton = document.getElementById("gotopbtn");

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (screen.width >= 980 && document.documentElement.scrollTop > 600) {
        mybutton.style.display = "block";
    }  else {
        mybutton.style.display = "none";
    }
}

function myFunction() {
    var x = document.getElementById("mMenu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}



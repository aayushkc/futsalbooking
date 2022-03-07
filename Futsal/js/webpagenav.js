let header = document.querySelector('.header');
let hamburgerMenu = document.querySelector('.hamburger-menu');

hamburgerMenu.addEventListener('click', function(){
	header.classList.toggle('menu-open');
})

var myNav = document.querySelector('.header');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
        document.querySelector(".header").style.background = "rgba(59, 102, 55,0.9)";
        document.querySelector(".header").style.transition = "1.5s";
    } 
    else {
        document.querySelector(".header").style.background = "rgb(59, 102, 55)";

    }
};

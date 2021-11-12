const menuBtn = document.querySelector(".menu-toggle");
const topNav = document.querySelector(".navbar-style");
if(menuBtn && topNav){
menuBtn.addEventListener("click", function () {
    topNav.classList.toggle("navbar-style-open");
    menuBtn.classList.toggle("menu-open");
});
}


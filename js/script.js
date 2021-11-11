const menuBtn = document.querySelector(".menu-toggle");
const topNav = document.querySelector(".navbar");
if(menuBtn && topNav){
menuBtn.addEventListener("click", function () {
    topNav.classList.toggle("navbar-open");
    menuBtn.classList.toggle("menu-open");
});
}


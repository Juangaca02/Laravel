// Navbar
document.addEventListener("scroll", function () {
    var navbar = document.querySelector('.oscuroScroll');
    if (window.scrollY > 0) {
        navbar.classList.add('opaque');
    } else {
        navbar.classList.remove('opaque');
    }
});
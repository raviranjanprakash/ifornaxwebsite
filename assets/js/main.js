document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
      const navbar = document.getElementById("navbar_top");
      if (window.scrollY > 80) {
        navbar.classList.add("fixed-top");
        // Add padding-top to body to prevent content jump
        const navbarHeight = navbar.offsetHeight;
        document.body.style.paddingTop = navbarHeight + "px";
      } else {
        navbar.classList.remove("fixed-top");
        // Remove padding-top when not fixed
        document.body.style.paddingTop = "0";
      }
    });
});

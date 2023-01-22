var hamburgerMenu = document.querySelector(".hamburger");
var headerNav = document.querySelector(".bg-blue");

hamburgerMenu.addEventListener("click", () => {
  headerNav.classList.toggle("bg-blue--open");
  hamburgerMenu.classList.toggle("active");
  document.body.classList.toggle("open");
});

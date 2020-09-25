AOS.init({
  duration: 1000,
});

const menuIcon = document.querySelector(".hamburger-menu");
const navSlide = document.querySelector(".nav-slide");
const navBar = document.querySelector(".navbar");

menuIcon.addEventListener("click", () => {
  navSlide.classList.toggle("change");
  navBar.classList.toggle("change");
});

const navLinks = document.querySelector(".nav-list");

navLinks.addEventListener("click", () => {
  navSlide.classList.toggle("change");
  navBar.classList.toggle("change");
});

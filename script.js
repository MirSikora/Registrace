"use strict";

/******* HAMBURGER NAVBAR *******/

const menuIcon = document.querySelector(".menu-icon"),
  navbar = document.querySelector(".nav-menu"),
  hamburgerIcon = document.querySelector(".fa-solid");

menuIcon.addEventListener("click", () => {
  if (navbar.classList.contains("active")) {
    navbar.classList.add("disactive");
    navbar.classList.remove("active");
    hamburgerIcon.classList.remove("fa-xmark");
    hamburgerIcon.classList.add("fa-bars");
  } else {
    navbar.classList.add("active");
    navbar.classList.remove("disactive");
    hamburgerIcon.classList.remove("fa-bars");
    hamburgerIcon.classList.add("fa-xmark");
  }
});

"use strict";

/******* HAMBURGER NAVBAR *******/

const menuIcon = document.querySelector(".menu-icon"),
  navbar = document.querySelector(".nav-menu"),
  body = document.querySelector("body");

menuIcon.addEventListener("click", () => {
  if (navbar.classList.contains("active")) {
    navbar.classList.add("disactive");
    navbar.classList.remove("active");
  } else {
    navbar.classList.add("active");
    navbar.classList.remove("disactive");
  }
});

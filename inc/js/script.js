const carousel = document.querySelector(".carousel-inner");

document.addEventListener("DOMContentLoaded", addActive);

function addActive() {
  if (carousel) {
    const carouselItems = carousel.children;
    carouselItems[0].classList.add("active");
  } else {
    return;
  }
}

// const headerLogo = document.getElementById("header-logo");
// const toggleEl = document.getElementById("toggle");

// headerLogo.addEventListener("click", openNav);

// function openNav() {
//   toggleEl.checked = true;
// }

const headerLogo = document.getElementById("header-logo");
const toggleEl = document.getElementById("toggle");
const toggleBtn = document.getElementById("toggle-btn");
const nav = document.getElementById("nav");

headerLogo.addEventListener("click", openNav);
toggleBtn.addEventListener("click", closeNav);

function openNav() {
  toggleEl.checked = true;
  toggleBtn.style.display = "block";
}

function closeNav() {
  toggleBtn.style.display = "none";
}

// Update Footer Date

const dateElement = document.getElementById("current-year");

function updateDate() {
  const date = new Date().getFullYear();
  dateElement.innerHTML = date;
}

updateDate();

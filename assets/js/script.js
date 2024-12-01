let hamburger = document.querySelector("#hamburger");
let navMenu = document.querySelector(".nav-menu");

console.log("hi");
hamburger.addEventListener("click", () => {
  console.log(navMenu);
  navMenu.classList.toggle("md:!flex");
});

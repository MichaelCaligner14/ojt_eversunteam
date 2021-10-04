const btnn = document.querySelector("button.button");
const menu = document.querySelector(".mobile");

btnn.addEventListener("click" , () => {
menu.classList.toggle("hidden");
});
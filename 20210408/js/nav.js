const navbar_toggle = document.querySelector(".navbar_toggle");
const navbar_menu = document.querySelector(".navbar_menu");

console.log(navbar_toggle);

navbar_toggle.addEventListener('click', ()=>{
    console.log("hi");
    navbar_menu.classList.toggle('active');
});
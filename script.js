const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const showPopuphome = document.querySelector(".link");
const showPopupresearch = document.querySelector(".linke");
const showPopuphistory = document.querySelector(".linkq");
const showPopupproducts = document.querySelector(".linkqw");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");
// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());
showPopuphome.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});
showPopuphistory.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});
showPopupproducts.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});
showPopupresearch.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});
// Show login popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

// Show or hide signup form
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});

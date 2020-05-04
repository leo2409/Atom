const menuBtn = document.querySelector('.burger_Btn');
const line1 = document.querySelector('.line1');
const line2 = document.querySelector('.line2');
const line3 = document.querySelector('.line3');
const nav = document.querySelector('.hide-ul');

const xBtn = document.querySelector('.x-Btn');
const loginSuccess = document.querySelector('.login-successful')

let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);
xBtn.addEventListener('click', invisibility);

function toggleMenu() {
    if (!showMenu) {
        menuBtn.classList.add('open');
        line1.classList.add('open');
        line2.classList.add('open');
        line3.classList.add('open');
        nav.classList.add('open');

        showMenu = true;
    } else {
        menuBtn.classList.remove('open');
        line1.classList.remove('open');
        line2.classList.remove('open');
        line3.classList.remove('open');
        nav.classList.remove('open');

        showMenu = false;
    }
}

function invisibility() {
    loginSuccess.classList.add('x');
}
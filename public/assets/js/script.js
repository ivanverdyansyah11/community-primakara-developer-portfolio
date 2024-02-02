const hamburger = document.querySelector('.hamburger-wrapper');
const topbar = document.querySelector('.topbar');
const body = document.querySelector('#home');

hamburger.addEventListener('click', function() {
    topbar.classList.toggle('hide');
    body.classList.toggle('active');
});
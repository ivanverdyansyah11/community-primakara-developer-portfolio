const hamburger = document.querySelector('.hamburger-wrapper');
const topbar = document.querySelector('.topbar');

hamburger.addEventListener('click', function() {
    topbar.classList.toggle('hide');
    hamburger.classList.toggle('active');
});
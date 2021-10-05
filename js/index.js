var open = document.querySelector('.buttom-open');
var courses = document.querySelector('.courses');
var close = document.querySelector('.buttom2');

var contentA2 = document.querySelector('.contentA2');

open.addEventListener('click', () => {
    courses.style.display = "none";
    contentA2.style.display = "block";
});
close.addEventListener('click', () => {
    courses.style.display = "block";
    contentA2.style.display = "none";
});
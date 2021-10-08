let open = document.querySelector('.buttom-open');
let courses = document.querySelector('.courses');
let close = document.querySelector('.buttom2');

let contentA2 = document.querySelector('.contentA2');

open.addEventListener('click', () => {
    courses.style.display = "none";
    contentA2.style.display = "block";
});

close.addEventListener('click', () => {
    courses.style.display = "block";
    contentA2.style.display = "none";
});
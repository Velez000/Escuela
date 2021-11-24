// En este archivo se ocultan los cursos al cargar el home, en un input hidden estan las categorias que se traen desde
// la bd y se cargan en los que estan inscritos
coursesPrint = document.getElementById("category").value;
course1 = document.querySelector(".course-1");
course2 = document.querySelector(".course-2");
course3 = document.querySelector(".course-3");
course4 = document.querySelector(".course-4");

const openModel = document.querySelector('.buttom-open');
const courses = document.querySelector('.courses');
const close = document.querySelector('.buttom2');

const contentA2 = document.querySelector('.contentA2');

course1.style.display = "none";
course2.style.display = "none";
course3.style.display = "none";
course4.style.display = "none";

if (coursesPrint == "A2") {

    course1.style.display = "Block";

} else if (coursesPrint == "B1") {

    course2.style.display = "Block";

} else if (coursesPrint == "C1") {

    course3.style.display = "Block";

} else if (coursesPrint == "Montacargas") {

    course4.style.display = "Block";

} else if (coursesPrint == "A2B1") {

    course1.style.display = "Block";
    course2.style.display = "Block";

} else if (coursesPrint == "A2C1") {

    course1.style.display = "Block";
    course3.style.display = "Block";

} else if (coursesPrint == "A2Montacargas") {

    course1.style.display = "Block";
    course4.style.display = "Block";

} else if (coursesPrint == "A2B1C1") {

    course1.style.display = "Block";
    course2.style.display = "Block";
    course3.style.display = "Block";

} else if (coursesPrint == "A2B1C1Montacargas") {

    course1.style.display = "Block";
    course2.style.display = "Block";
    course3.style.display = "Block";
    course4.style.display = "Block";
    if (openModel) {
        openModel.addEventListener('click', () => {
            courses.style.display = "none";
            contentA2.style.display = "block";
        });
    }

    if (close) {
        close.addEventListener('click', () => {
            courses.style.display = "block";
            contentA2.style.display = "none";
        });
    }

} else if (coursesPrint == "B1C1") {

    course2.style.display = "Block";
    course3.style.display = "Block";

} else if (coursesPrint == "B1Montacargas") {

    course2.style.display = "Block";
    course4.style.display = "Block";

} else if (coursesPrint == "B1C1Montacargas") {

    course2.style.display = "Block";
    course3.style.display = "Block";
    course4.style.display = "Block";

} else if (coursesPrint == "C1Montacargas") {

    course3.style.display = "Block";
    course4.style.display = "Block";

}
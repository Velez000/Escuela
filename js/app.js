coursesPrint = document.getElementById("category").value;
course1 = document.querySelector(".course-1");
course2 = document.querySelector(".course-2");
course3 = document.querySelector(".course-3");
course4 = document.querySelector(".course-4");

course1.style.display = "none";
course2.style.display = "none";
course3.style.display = "none";
course4.style.display = "none";

if (coursesPrint == "A2") {
    course1.style.display = "Block";
    course2.style.display = "none";
    course3.style.display = "none";
    course4.style.display = "none";

    let openA2 = document.querySelector("buttom-open");


} else if (coursesPrint == "B1") {
    course1.style.display = "none";
    course2.style.display = "Block";
    course3.style.display = "none";
    course4.style.display = "none";
} else if (coursesPrint == "C1") {
    course1.style.display = "none";
    course2.style.display = "none";
    course3.style.display = "Block";
    course4.style.display = "none";
} else if (coursesPrint == "Montacargas") {
    course1.style.display = "none";
    course2.style.display = "none";
    course3.style.display = "none";
    course4.style.display = "Block";
} else if (coursesPrint == "A2B1") {
    course1.style.display = "Block";
    course2.style.display = "Block";
    course3.style.display = "none";
    course4.style.display = "none";
} else if (coursesPrint == "A2C1") {
    course1.style.display = "Block";
    course2.style.display = "none";
    course3.style.display = "Block";
    course4.style.display = "none";
} else if (coursesPrint == "A2Montacargas") {
    course1.style.display = "Block";
    course2.style.display = "none";
    course3.style.display = "none";
    course4.style.display = "Block";
} else if (coursesPrint == "A2B1C1") {
    course1.style.display = "Block";
    course2.style.display = "Block";
    course3.style.display = "Block";
    course4.style.display = "none";
} else if (coursesPrint == "A2B1C1Montacargas") {
    course1.style.display = "Block";
    course2.style.display = "Block";
    course3.style.display = "Block";
    course4.style.display = "Block";
} else if (coursesPrint == "B1C1") {
    course1.style.display = "none";
    course2.style.display = "Block";
    course3.style.display = "Block";
    course4.style.display = "none";
} else if (coursesPrint == "B1Montacargas") {
    course1.style.display = "none";
    course2.style.display = "Block";
    course3.style.display = "none";
    course4.style.display = "Block";
} else if (coursesPrint == "B1C1Montacargas") {
    course1.style.display = "none";
    course2.style.display = "Block";
    course3.style.display = "Block";
    course4.style.display = "Block";
} else if (coursesPrint == "C1Montacargas") {
    course1.style.display = "none";
    course2.style.display = "none";
    course3.style.display = "Block";
    course4.style.display = "Block";
}
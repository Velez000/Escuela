var contador = 0;
var seis = document.querySelector(".temp6");
var siete = document.querySelector(".temp7");
var ocho = document.querySelector(".temp8");
var nueve = document.querySelector(".temp9");
var diez = document.querySelector(".temp10");
var once = document.querySelector(".temp11");
var doce = document.querySelector(".temp12");
var trece = document.querySelector(".temp13");

seis.style.display = "none";
siete.style.display = "none";
ocho.style.display = "none";
nueve.style.display = "none";
diez.style.display = "none";
once.style.display = "none";
doce.style.display = "none";
trece.style.display = "none";

function suma() {

    updateDisplay(++contador);
    console.log(contador);
}

function resta() {

    updateDisplay(--contador);
    console.log(contador);
}


function updateDisplay(val) {
    if (val < 1 || val > 13) {

    } else if (val == 1) {

        seis.style.display = "Block";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "none";

    } else if (val == 2) {
        seis.style.display = "none";
        siete.style.display = "Block";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "none";

    } else if (val == 3) {
        seis.style.display = "none";
        siete.style.display = "none";
        ocho.style.display = "Block";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "none";

    } else if (val == 4) {
        seis.style.display = "none";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "Block";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "none";

    } else if (val == 5) {
        seis.style.display = "none";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "Block";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "none";
    } else if (val == 6) {
        seis.style.display = "none";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "block";
        doce.style.display = "none";
        trece.style.display = "none";
    } else if (val == 7) {
        seis.style.display = "none";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "block";
        trece.style.display = "none";
    } else if (val == 8) {
        seis.style.display = "none";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "block";
    } else {
        contador = 0;
    }

}
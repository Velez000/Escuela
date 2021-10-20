var seis = document.querySelector(".temp6");
var siete = document.querySelector(".temp7");
var ocho = document.querySelector(".temp8");
var nueve = document.querySelector(".temp9");
var diez = document.querySelector(".temp10");
var once = document.querySelector(".temp11");
var doce = document.querySelector(".temp12");
var trece = document.querySelector(".temp13");
var click = document.querySelector("#next");

seis.style.display = "none";
siete.style.display = "none";
ocho.style.display = "none";
nueve.style.display = "none";
diez.style.display = "none";
once.style.display = "none";
doce.style.display = "none";
trece.style.display = "none";

function incrementClick2() {
    updateDisplay(++counterVal);
}

function decrementClick2() {
    updateDisplay(--counterVal);
}

function updateDisplay(val) {
    if (val <= 6 || val > 13) {
        counterVal = 6;
    } else if (val == 6) {
        seis.style.display = "Block";
        siete.style.display = "none";
        ocho.style.display = "none";
        nueve.style.display = "none";
        diez.style.display = "none";
        once.style.display = "none";
        doce.style.display = "none";
        trece.style.display = "none";
    }
}
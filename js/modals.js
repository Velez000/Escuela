var counterVal = 0;
var uno = document.querySelector('.temp1');
var dos = document.querySelector('.temp2');
var tres = document.querySelector('.temp3');
var cuatro = document.querySelector('.temp4');
var cinco = document.querySelector('.temp5');
var seis = document.querySelector('.temp6');
var siete = document.querySelector('.temp7');
var ocho = document.querySelector('.temp8');
var nueve = document.querySelector('.temp9');
var diez = document.querySelector('.temp10');
var once = document.querySelector('.temp11');
var doce = document.querySelector('.temp12');
var trece = document.querySelector('.temp13');
var click = document.querySelector('#next');

uno.style.display = "none";
dos.style.display = "none";
tres.style.display = "none";
cuatro.style.display = "none";
cinco.style.display = "none";


function incrementClick() {
    updateDisplay(++counterVal);

}

function decrementClick() {

    updateDisplay(--counterVal);
}

function updateDisplay(val) {
    if (val < 0 || val > 6) {
        counterVal = 1;

    } else if (val <= 1) {
        uno.style.display = "Block";
        dos.style.display = "none";
        tres.style.display = "none";
        cuatro.style.display = "none";
        cinco.style.display = "none";
    } else if (val == 2) {
        uno.style.display = "none";
        dos.style.display = "Block";
        tres.style.display = "none";
        cuatro.style.display = "none";
        cinco.style.display = "none";

    } else if (val == 3) {
        uno.style.display = "none";
        dos.style.display = "none";
        tres.style.display = "Block";
        cuatro.style.display = "none";
        cinco.style.display = "none";

    } else if (val == 4) {
        uno.style.display = "none";
        dos.style.display = "none";
        tres.style.display = "none";
        cuatro.style.display = "Block";
        cinco.style.display = "none";

    } else if (val == 5) {
        uno.style.display = "none";
        dos.style.display = "none";
        tres.style.display = "none";
        cuatro.style.display = "none";
        cinco.style.display = "Block";
    } else {
        counterVal = 0;
    }

}
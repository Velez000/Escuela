var counterVal = 0;
var uno = document.querySelector('.temp1');
var dos = document.querySelector('.temp2');
var tres = document.querySelector('.temp3');
var cuatro = document.querySelector('.temp4');
var cinco = document.querySelector('.temp5');
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
    counterVal = counterVal - 1;
    updateDisplay(counterVal);
}

function updateDisplay(val) {
    console.log(val);
    if (val < 0 || val > 5) {
        counterVal = 0;
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
    }
}
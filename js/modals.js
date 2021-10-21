var counterVal = 0;
var content1 = document.querySelector(".temp1");
var content2 = document.querySelector(".temp2");
var content3 = document.querySelector(".temp3");
var content4 = document.querySelector(".temp4");
var content5 = document.querySelector(".temp5");
var content6 = document.querySelector(".temp6");
var content7 = document.querySelector(".temp7");
var content8 = document.querySelector(".temp8");
var content9 = document.querySelector(".temp9");
var content10 = document.querySelector(".temp10");
var content11 = document.querySelector(".temp11");
var content12 = document.querySelector(".temp12");
var content13 = document.querySelector(".temp13");
var content14 = document.querySelector(".temp14");

content1.style.display = "none";
content2.style.display = "none";
content3.style.display = "none";
content4.style.display = "none";
content5.style.display = "none";
content6.style.display = "none";
content7.style.display = "none";
content8.style.display = "none";
content9.style.display = "none";
content10.style.display = "none";
content11.style.display = "none";
content12.style.display = "none";
content13.style.display = "none";
content14.style.display = "none";

function incrementClick() {
    updateDisplay(++counterVal);
}

function decrementClick() {
    updateDisplay(--counterVal);
}

function updateDisplay(val) {
    if (val < 0 || val > 14) {
        counterVal = 1;
    } else if (val <= 1) {
        content1.style.display = "Block";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 2) {
        content1.style.display = "none";
        content2.style.display = "block";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 3) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "block";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 4) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "block";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 5) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "block";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 6) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "block";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 7) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "block";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 8) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "block";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 9) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "block";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 10) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "block";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 11) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "block";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 12) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "block";
        content13.style.display = "none";
        content14.style.display = "none";
    } else if (val == 13) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "block";
        content14.style.display = "none";
    } else if (val == 14) {
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "none";
        content4.style.display = "none";
        content5.style.display = "none";
        content6.style.display = "none";
        content7.style.display = "none";
        content8.style.display = "none";
        content9.style.display = "none";
        content10.style.display = "none";
        content11.style.display = "none";
        content12.style.display = "none";
        content13.style.display = "none";
        content14.style.display = "block";
    } else {
        counterVal = 1;
    }
}
var open = document.querySelector('.buttom-open');
var container = document.querySelector('.div-container');
var close = document.querySelector('.buttom-close');
var open2 = document.querySelector('.buttom-open2');
var container2 = document.querySelector('.container2');
var close2 = document.querySelector('.buttom-close2');
var open3 = document.querySelector('.buttom-open3');
var container3 = document.querySelector('.container3');
var close3 = document.querySelector('.buttom-close3');
var open4 = document.querySelector('.buttom-open4');
var container4 = document.querySelector('.container4');
var close4 = document.querySelector('.buttom-close4');

    open.addEventListener('click', ()=>{
        container.style.display = "block";
    });

    close.addEventListener('click', ()=>{
        container.style.display = "none";
    });

    open2.addEventListener('click', ()=>{
        container2.style.display = "block";
    });

    close2.addEventListener('click', ()=>{
        container2.style.display = "none";
    });
    open3.addEventListener('click', ()=>{
        container3.style.display = "block";
    });

    close3.addEventListener('click', ()=>{
        container3.style.display = "none";
    });

    open4.addEventListener('click', ()=>{
        container4.style.display = "block";
    });

    close4.addEventListener('click', ()=>{
        container4.style.display = "none";
    });

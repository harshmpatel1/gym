let burger =  document.querySelector('.burger');
let left   =  document.querySelector('.left');
let right  =  document.querySelector('.right');
let header =  document.querySelector('header');
burger.addEventListener('click',()=>{
    left.classList.toggle('v-class');
    right.classList.toggle('v-class');
    // right.classList.toggle('right');
    header.classList.toggle('h-nav');
});
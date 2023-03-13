console.log('ciao');

// const scrollingWrapper = document.querySelector('.scrolling-wrapper');

// scrollingWrapper.addEventListener('wheel', (event) => {
//   event.preventDefault();
//   scrollingWrapper.scrollLeft += event.deltaY;
// });





// spinner js

window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    loader.classList.add("loader-hidden");

    loader.addEventListener("transitionend", () => {
        loader.remove(".loader");
    })
})





// js navbar
/*=============== LINK ACTIVE ===============*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

const navBody = document.querySelector ('#body-div')

// let navlente = document.getElementById('#navlente')
// let navbarra = document.getElementById('#navbarra')
/*=============== SHOW HIDDEN MENU ===============*/
const showMenu = (toggleId, navbarId) =>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
            /* Show menu */
            navbar.classList.toggle('show-menu')
            /* Rotate toggle icon */
            toggle.classList.toggle('rotate-icon')
            // navlente.classList.toggle('d-none')
            // navbarra.classList.toggle('d-none')


            navBody.classList.toggle('margin-body')
        })
    }
}
showMenu('nav-toggle','nav')







// show js
// window.addEventListener('scroll', function() {
//     let scroll = window.pageYOffset;
//     let zoomImage = document.querySelector('.zoom-me img');
//     zoomImage.style.width = (100 + scroll/5) + '%';
//     zoomImage.style.top = -(scroll/10) + '%';
//     zoomImage.style.webkitFilter = 'blur(' + (scroll/200) + 'px)';
//     zoomImage.style.filter = 'blur(' + (scroll/200) + 'px)';
//   });
window.addEventListener('scroll', function() {
    let scroll = window.pageYOffset;
    let zoomImage = document.querySelector('.zoom-me img');
    let zoom = 1 + scroll/1000;
    zoomImage.style.transform = 'scale(' + zoom + ')';
  });
  







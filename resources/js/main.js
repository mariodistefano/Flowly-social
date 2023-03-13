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
const nascondiScritta = document.querySelector ('#none-scritta')
const nascondiLente = document.querySelector ('#none-lente')

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
             navBody.classList.toggle('focus')

           
            // navlente.classList.toggle('d-none')
            // navbarra.classList.toggle('d-none')

            nascondiScritta.classList.toggle('none-scritta')
            nascondiLente.classList.toggle('none-lente')
            navBody.classList.toggle('margin-body')
         

        })
    }
}
showMenu('nav-toggle','nav')







// show js

$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    $(".zoom img").css({
    width: (100 + scroll/5)  + "%",
    top: -(scroll/10)  + "%",
    });
    });
  



// let ToggleNavBar = document.querySelector('#ToggleNavBar')

//     ToggleNavBar.addEventListener('click')






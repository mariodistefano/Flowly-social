console.log('ciao');

const scrollingWrapper = document.querySelector('.scrolling-wrapper');

scrollingWrapper.addEventListener('wheel', (event) => {
  event.preventDefault();
  scrollingWrapper.scrollLeft += event.deltaY;
});


// js navbar
/*=============== LINK ACTIVE ===============*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

const navBody = document.querySelector ('#body-div')

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

            navBody.classList.toggle('margin-body')
        })
    }
}
showMenu('nav-toggle','nav')


// show js
$(window).scroll(function() {
    let scroll = $(window).scrollTop();
      $(".zoom-me img").css({
          width: (100 + scroll/5)  + "%",
          top: -(scroll/10)  + "%",
          //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
          "-webkit-filter": "blur(" + (scroll/200) + "px)",
          filter: "blur(" + (scroll/200) + "px)"
      });
  });
  

//   form js

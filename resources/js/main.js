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
// const nascondiScritta = document.querySelector ('#none-scritta')
// const nascondiLente = document.querySelector ('#none-lente')

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

            // nascondiScritta.classList.toggle('none-scritta')
            // nascondiLente.classList.toggle('none-lente')
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




// card scrolling

// let scrollTimer = null;
// const delay = 2000; // Tempo di attesa in millisecondi
// let autoScroll = true;

// function startAutoScroll() {
//   scrollTimer = setInterval(function() {
//     const container = document.querySelector('.card-container');
//     container.scrollLeft += 1;

//     if (container.scrollLeft >= (container.scrollWidth - container.offsetWidth)) {
//       // Quando raggiungi la fine delle card, riposiziona alla prima card
//       container.scrollLeft = 0;
//     }
//   }, 10);
// }

// function stopAutoScroll() {
//   clearInterval(scrollTimer);
// }

// const container = document.querySelector('.card-container');
// container.addEventListener('mouseover', stopAutoScroll);
// container.addEventListener('mouseout', function() {
//   if (autoScroll) {
//     startAutoScroll();
//   }
// });

// container.addEventListener('scroll', function() {
//   // Ferma lo scorrimento automatico quando l'utente scorre manualmente
//   autoScroll = false;
// });

// startAutoScroll();


let scrollTimer = null;
const delay = 2000; // Tempo di attesa in millisecondi
let autoScroll = true;
let scrollDirection = 'right'; // Direzione di scorrimento

function startAutoScroll() {
  scrollTimer = setInterval(function() {
    const container = document.querySelector('.card-container');
    if (scrollDirection === 'right') {
      container.scrollLeft += 1;
    } else {
      container.scrollLeft -= 1;
    }
    
    if (container.scrollLeft >= (container.scrollWidth - container.offsetWidth)) {
      // Quando raggiungi la fine delle card in una direzione, inverti la direzione di scorrimento
      scrollDirection = 'left';
    } else if (container.scrollLeft === 0) {
      // Quando raggiungi la fine delle card in un'altra direzione, inverti la direzione di scorrimento
      scrollDirection = 'right';
    }
  }, 10);
}

function stopAutoScroll() {
  clearInterval(scrollTimer);
}

const container = document.querySelector('.card-container');
container.addEventListener('mouseover', stopAutoScroll);
container.addEventListener('mouseout', function() {
  if (autoScroll) {
    startAutoScroll();
  }
});

container.addEventListener('scroll', function() {
  // Ferma lo scorrimento automatico quando l'utente scorre manualmente
  autoScroll = false;
});

startAutoScroll();






// searchbar
$("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
});


// fa sparire l'omino
$(document).ready(function() {
    // Verifica se la pagina è visualizzata in modalità cellulare
    if ($(window).width() < 768) {
      // Se la pagina è in modalità cellulare, aggiungi la classe "d-none" all'elemento
      $('.omino').addClass('d-none');
    }
  });
  
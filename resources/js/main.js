console.log('ciao');

const scrollingWrapper = document.querySelector('.scrolling-wrapper');

scrollingWrapper.addEventListener('wheel', (event) => {
  event.preventDefault();
  scrollingWrapper.scrollLeft += event.deltaY;
});
console.log('ciao');

let form = document.getElementById("form");
let preview = document.getElementById("preview");


form.addEventListener("mouseenter", function() {
  preview.classList.add("show");
// //   preview.classList.add("d-none")

});

form.addEventListener("mouseleave", function() {
//   preview.classList.remove("show");
 preview.classList.remove("d-none")
});
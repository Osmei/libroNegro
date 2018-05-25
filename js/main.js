
const left = document.querySelector(".left");
const right = document.querySelector(".right");
const container = document.querySelector(".container");
const admision = document.getElementById('admision');
const libroNegro = document.getElementById('libro_negro');
const seguridad = document.getElementById('seguridad');

left.addEventListener("mouseenter", () => {
  container.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  container.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  container.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  container.classList.remove("hover-right");
});

admision.addEventListener('click', () => {
  location.href = 'admision/admision.php';
});

libroNegro.addEventListener('click', () => {
  location.href = 'acciones.html';
});

seguridad.addEventListener('click', () => {

});

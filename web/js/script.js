// Habilitar botón submit cuando el usuario acepta el checkbox
let disableCheckBox = document.querySelector("#gridCheck");
var submitButton = document.querySelector("#submit");

if (disableCheckBox != null) {
  disableCheckBox.addEventListener("change", function() {
    if (disableCheckBox.checked) {
      submitButton.disabled = false;
    } else {
      submitButton.disabled = true;
    }
  });
}


//Números en inicio

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const alumnos = document.getElementById("numbersAlumnos");
const cursos = document.getElementById("numbersCursos");
const totales = document.getElementById("numbersTotales");
const satisfaccion = document.getElementById("numbersSatisfaccion");

if(alumnos != null && cursos != null && totales != null && satisfaccion != null) {
  animateValue(alumnos, 0, 120, 1500);
  animateValue(cursos, 0, 23, 1500);
  animateValue(totales, 0, 480, 1500);
  animateValue(satisfaccion, 0, 100, 1500);
}


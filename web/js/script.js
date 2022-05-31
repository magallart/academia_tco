// Habilitar botón submit cuando el usuario acepta el checkbox
let disableCheckBox = document.querySelector("#gridCheck");
var submitButton = document.querySelector("#submit");

disableCheckBox.addEventListener("change", function() {
  if (disableCheckBox.checked) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
});


const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

//Show input error message

function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = "form-control error";
  const small = formControl.querySelector("small");
  small.innerText = message;
}

function showSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

//Email

function isValidEmail(email) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

form.addEventListener("submit", function (e) {
  e.preventDefault();

  if (username.value === "") {
    showError(username, "Emri i përdouesit është i nevojshëm");
  } else {
    showSuccess(username);
  }
  if (email.value === "") {
    showError(email, "Adresa Elektronike është e nevojshme");
  } else if (!isValidEmail(email.value)) {
    showError(email, "Adresa Elektronike nuk është valide");
  } else {
    showSuccess(email);
  }

  if (password.value === null) {
    showError(password, "Fjalëkalimi është i nevojshëm");
  } else {
    showSuccess(password);
  }
  if (nrKontakt.value === null) {
    showError(nrKontakt, "Numri kontaktues është i nevojshëm");
  } else if (nrKontakt.contains(string)) {
    showError(nrKontakt, "Numri kontaktues nuk mund te permbaje shkronja");
  } else {
    showSuccess(nrKontakt);
    alert("Regjistrimi u krye me sukses");
  }
});

// Done

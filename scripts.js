const addressForm = document.querySelector("#address-form");
const cepInput = document.querySelector("#cep");
const estadoInput = document.querySelector("#estado");
const cidadeInput = document.querySelector("#cidade");
const formInputs = document.querySelectorAll("[data-input]");


cepInput.addEventListener("keypress", (e) => {
  const onlyNumbers = /[0-9]|\./;
  const key = String.fromCharCode(e.keyCode);

  console.log(key);

  console.log(onlyNumbers.test(key));

  if (!onlyNumbers.test(key)) {
    e.preventDefault();
    return;
  }
});

cepInput.addEventListener("keyup", (e) => {
  const inputValue = e.target.value;

  if (inputValue.length === 8) {
    getAddress(inputValue);
  }
});

const getAddress = async (cep) => {

  cepInput.blur();

  const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

  const response = await fetch(apiUrl);

  const data = await response.json();

  console.log(data);
  console.log(formInputs);
  console.log(data.erro);

  estadoInput.value = data.uf;
  cidadeInput.value = data.localidade;

};
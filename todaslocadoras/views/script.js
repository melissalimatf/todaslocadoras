

// MENU HEADER DROPDOWN
document.addEventListener("DOMContentLoaded", function() {
var dropdownBtn = document.querySelector('.dropbtn');
var dropdownContent = document.getElementById('myDropdown');

// Adiciona um ouvinte de evento ao botão para alternar a classe "show" no menu
dropdownBtn.addEventListener('click', function() {
  dropdownContent.classList.toggle('show');
});

// Fecha o menu se o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName('dropdown-content');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
});
var menu = document.querySelector('.dropdown-content');
menu.addEventListener('click', function(event) {
  event.stopPropagation();
});
});

// CENTRAL DE AJUDA HEADER DROPDOWN
document.addEventListener("DOMContentLoaded", function() {
var dropdownBtnCentral = document.querySelector('.dropbtn-central');
var dropdownContentCentral = document.getElementById('myDropdown-central');

// Adiciona um ouvinte de evento ao botão para alternar a classe "show" no menu
dropdownBtnCentral.addEventListener('click', function() {
  dropdownContentCentral.classList.toggle('show-central');
});

// Fecha o menu se o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn-central')) {
    var dropdowns = document.getElementsByClassName('dropdown-central-content');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-central')) {
        openDropdown.classList.remove('show-central');
      }
    }
  }
});
var menu = document.querySelector('.dropdown-central-content');
menu.addEventListener('click', function(event) {
  event.stopPropagation();
});
});

// IDIOMAS HEADER DROPDOWN
document.addEventListener("DOMContentLoaded", function() {
var dropdownBtnIdiomas = document.querySelector('.dropbtn-idiomas');
var dropdownContentIdiomas = document.getElementById('myDropdown-idiomas');

// Adiciona um ouvinte de evento ao botão para alternar a classe "show" no menu
dropdownBtnIdiomas.addEventListener('click', function() {
  dropdownContentIdiomas.classList.toggle('show-idiomas');
});

// Fecha o menu se o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn-idiomas')) {
    var dropdowns = document.getElementsByClassName('dropdown-idiomas-content');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-idiomas')) {
        openDropdown.classList.remove('show-idiomas');
      }
    }
  }
});
var menu = document.querySelector('.dropdown-idiomas-content');
menu.addEventListener('click', function(event) {
  event.stopPropagation();
});
});

//    MOEDAS HEADER DROPDOWN
document.addEventListener("DOMContentLoaded", function() {
var dropdownBtnMoedas = document.querySelector('.dropbtn-moedas');
var dropdownContentMoedas = document.getElementById('myDropdown-moedas');

// Adiciona um ouvinte de evento ao botão para alternar a classe "show" no menu
dropdownBtnMoedas.addEventListener('click', function() {
  dropdownContentMoedas.classList.toggle('show-moedas');
  
});
// Fecha o menu se o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn-moedas')) {
    var dropdowns = document.getElementsByClassName('drop-moedas');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-moedas')) {
        openDropdown.classList.remove('show-moedas');
      }
    }
  }
});
var menu = document.querySelector('.drop-moedas');
menu.addEventListener('click', function(event) {
  event.stopPropagation();
});
});

//    MINHAS RESERVAS HEADER DROPDOWN
document.addEventListener("DOMContentLoaded", function() {
var dropdownBtnReservas = document.querySelector('.dropbtn-reservas');
var dropdownContentReservas = document.getElementById('myDropdown-reservas');

// Adiciona um ouvinte de evento ao botão para alternar a classe "show" no menu
dropdownBtnReservas.addEventListener('click', function() {
  dropdownContentReservas.classList.toggle('show-reservas');
});
// Fecha o menu se o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn-reservas')) {
    var dropdowns = document.getElementsByClassName('dropdown-reservas-content');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-reservas')) {
        openDropdown.classList.remove('show-reservas');
      }
    }
  }
});
var menu = document.querySelector('.dropdown-reservas-content');
menu.addEventListener('click', function(event) {
  event.stopPropagation();
});
});

/*ICONE DE EMAIL E SENHA SUMIR AO ESCREVER*/

var iconeEmail = document.getElementsByClassName('email-reserva-icon');
var iconeSenha = document.getElementsByClassName('cadeado-reserva-icon');
var inputEmail = document.getElementsByClassName('input-email');
var inputSenha = document.getElementsByClassName('input-senha');

for (var i = 0; i < inputEmail.length; i++) {
inputEmail[i].addEventListener('click', function() {
  for (var j = 0; j < iconeEmail.length; j++) {
    iconeEmail[j].classList.toggle('hide-emailIcon');
  }
});
}

for (var i = 0; i < inputSenha.length; i++) {
inputSenha[i].addEventListener('click', function() {
  for (var j = 0; j < iconeSenha.length; j++) {
    iconeSenha[j].classList.toggle('hide-senhaIcon');
  }
});
}

//    ACESSE/CRIAR CONTA HEADER DROPDOWN
document.addEventListener("DOMContentLoaded", function() {
var dropdownBtnAcesse = document.querySelector('.dropbtn-acesse');
var dropdownContentAcesse = document.getElementById('myDropdown-acesse');

// Adiciona um ouvinte de evento ao botão para alternar a classe "show" no menu
dropdownBtnAcesse.addEventListener('click', function() {
  dropdownContentAcesse.classList.toggle('show-acesse');
});
// Fecha o menu se o usuário clicar fora dele
window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropbtn-acesse')) {
    var dropdowns = document.getElementsByClassName('dropdown-acesse-content');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-acesse')) {
        openDropdown.classList.remove('show-acesse');
      }
    }
  }
});
var menu = document.querySelector('.dropdown-acesse-content');
menu.addEventListener('click', function(event) {
  event.stopPropagation();
});
});

// carrousel
document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.carousel');
  const slides = document.querySelectorAll('.slide');
  const prevButton = document.querySelector('.prev');
  const nextButton = document.querySelector('.next');

  let currentIndex = 0;

  function showSlide(index) {
    if (index < 0) {
      index = slides.length - 1;
    } else if (index >= slides.length) {
      index = 0;
    }

    slides.forEach((slide) => {
      slide.style.display = 'none';
    });

    slides[index].style.display = 'block';
    currentIndex = index;
  }

  function nextSlide() {
    showSlide(currentIndex + 1);
  }

  function prevSlide() {
    showSlide(currentIndex - 1);
  }

  prevButton.addEventListener('click', prevSlide);
  nextButton.addEventListener('click', nextSlide);

  setInterval(nextSlide, 5000); // Avança automaticamente a cada 5 segundos
});


//faq

const toggleButtons = document.querySelectorAll('.toggle-button');
const toggleContents = document.querySelectorAll('.toggle-content');

toggleButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    toggleContents[index].classList.toggle('active');
  });
});


// api google maps
"use strict";

const ADDRESS_COMPONENT_TYPES_IN_FORM = [
  'location',
  'locality',
  'administrative_area_level_1',
  'postal_code',
  'country',
];

function getFormInputElement(componentType) {
  return document.getElementById(`${componentType}-input`);
}

function fillInAddress(place) {
  function getComponentName(componentType) {
    for (const component of place.address_components || []) {
      if (component.types[0] === componentType) {
        return component.long_name;
      }
    }
    return '';
  }

  function getComponentText(componentType) {
    return (componentType === 'location') ?
        place.name :
        getComponentName(componentType);
  }

  getFormInputElement('location').value = getComponentText('location');
  
  function getComponentText(componentType) {
    return (componentType === 'location2') ?
        place.name :
        getComponentName(componentType);
  }

  getFormInputElement('location2').value = getComponentText('location2');
}

async function initMap() {
  const { Autocomplete } = google.maps.places;

  const autocomplete = new Autocomplete(getFormInputElement('location'), {
    fields: ['address_components', 'name'],
    types: ['geocode'],
  });

  const autocomplete2 = new Autocomplete(getFormInputElement('location2'), {
    fields: ['address_components', 'name'],
    types: ['geocode'],
  });


}

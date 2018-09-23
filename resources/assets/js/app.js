import $ from 'jquery';

require('./components/canvas.js');

const menuToggle = $('#menu-toggle');
const menu = $('#toggle-nav');

menuToggle.click( () => {
  menu.toggleClass('top');
});

function toggleForm() {
  const toggle = document.getElementById('toggle-form');
  const form = document.getElementById('form');

  toggle.addEventListener('click', ( () => {
    form.classList.toggle('show');
  }));
}

toggleForm();

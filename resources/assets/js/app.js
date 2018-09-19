import 'jquery'
import $ from 'jquery'

let menu_toggle = $('#menu-toggle'),
    menu = $('#toggle-nav');

menu_toggle.click( function() {
    console.log('clicking!!');
    menu.toggleClass('left');
})

function toggleForm() {
    let toggle = document.getElementById('toggle-form');
    let form = document.getElementById('form');

    console.log(toggle);
    console.log(form);

    toggle.addEventListener("click", function() {
        form.classList.toggle('show');
    })
};

toggleForm();

import 'jquery'

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

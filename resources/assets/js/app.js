import $ from 'jquery';

require( './components/canvas.js');
require( './components/carousel.js' );

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

$( () => {
  const $nav = $('.title-bar');
  const $icon = $('.title-bar a .logo');
  const $menuIcon = $('#menu-toggle');
  let scrollFromTop = 0;

  $( window ).scroll( () => {
    scrollFromTop = $(window).scrollTop();
    if ( scrollFromTop >= 50 ) {
      $nav.addClass( 'scrolled' );
      $icon.addClass( 'scrolled' );
      $menuIcon.addClass( 'scrolled' );
    } else {
      $nav.removeClass( 'scrolled' );
      $icon.removeClass( 'scrolled' );
      $menuIcon.removeClass( 'scrolled' );
    }
  });
});

$( () => {
  const $scroll = $('.to_top');

  $scroll.click(() => {
    $('html, body').animate( { scrollTop: 0 }, 'slow' );
  });
});

// const pageHeight = window.innerHeight;

// window.addEventListener('scroll', ( () => {
//   $('html, body').animate( { scrollTop: pageHeight }, 'slow' );
// }));

toggleForm();

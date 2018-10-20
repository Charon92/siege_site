import $ from 'jquery';

require( './components/canvas');
require( './components/carousel' );
// require( './components/fullPageScroll');
require( '../../../node_modules/slick-carousel/slick/slick.js');

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

$( '.all_operators' ).slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 5000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
});

$( '.all_weapons' ).slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 5000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
});

toggleForm();

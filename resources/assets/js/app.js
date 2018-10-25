import $ from 'jquery';

require( './components/carousel' );
// require( './components/fullPageScroll');
require( './components/pageLoadAnimation' );
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
  const operatorInfo = document.getElementById('operator-info');
  const operatorToggle = document.querySelector('[data-operator-info]');

  const weaponInfo = document.getElementById('weapon-info');
  const weaponToggle = document.querySelector('[data-operator-weapon]');

  operatorToggle.addEventListener('click', () => {
    operatorInfo.classList.toggle('show');
  });
  weaponToggle.addEventListener('click', () => {
    weaponInfo.classList.toggle('show');
  })
});

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
  const tabs = [...document.getElementsByClassName( 'tab' )];
  const info = document.getElementById( 'info' );

  tabs.forEach( ( tab ) => {
    tab.addEventListener( 'click', () => {
      tab.classList.toggle( 'selected' );
      info.classList.toggle( 'show' );
    });
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

// document.addEventListener('DOMContentLoaded', () => {
//   const lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));

//   if ('IntersectionObserver' in window) {
//     const lazyImageObserver = new IntersectionObserver( (entries, observer) => {
//       entries.forEach( (entry) => {
//         if (entry.isIntersecting) {
//           const lazyImage = entry.target;
//           lazyImage.src = lazyImage.dataset.src;
//           lazyImage.srcset = lazyImage.dataset.srcset;
//           lazyImage.classList.remove('lazy');
//           lazyImageObserver.unobserve(lazyImage);
//         }
//       });
//     });

//     lazyImages.forEach( (lazyImage) => {
//       lazyImageObserver.observe(lazyImage);
//     });
//   } else {
//     // Possibly fall back to a more compatible method here
//   }
// });


toggleForm();

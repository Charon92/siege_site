import $ from 'jquery';

$( () => {
  const $slideshow = $('[data-slideshow]');
  const $slides = $('[data-slide]');

  $.each( $slides, ( index, element ) => {
    $( element ).css( 'width', $slideshow.width() );
  });
});

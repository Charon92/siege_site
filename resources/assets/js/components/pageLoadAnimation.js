const clickEvent = new MouseEvent('click', {
  view: window,
  bubbles: true,
  cancelable: false,
});

const loadAnimation = ( ...objects ) => {
  window.onload = () => {
    const info = document.getElementById( 'info' );

    objects.forEach( ( object ) => {
      setTimeout( object.classList.add( 'show' ), 3000 );
    });
    
    const displayInfo = setTimeout(info.dispatchEvent(clickEvent), 5000);
  };
};

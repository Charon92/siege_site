const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const dpi = window.devicePixelRatio;

// get CSS height
// the + prefix casts it to an integer
// the slice method gets rid of "px"
const styleHeight = +getComputedStyle(canvas).getPropertyValue('height').slice(0, -2);
  
// get CSS width
const styleWidth = +getComputedStyle(canvas).getPropertyValue('width').slice(0, -2);


function fixDpi() {
  // scale the canvas
  
  canvas.setAttribute('height', styleHeight * dpi);
  canvas.setAttribute('width', styleWidth * dpi);
}

function createCircles() {
  for (let i = 1; i < 50; i++ ) {
    const y = Math.random( 10 );
    const radius = i * y;
    let yPos = (styleHeight / 2);
    if ( yPos % 2 === 0 ) {
      yPos = -(styleHeight / 2);
    }

    ctx.arc( 50, yPos, radius / 2, 0, 2 * Math.PI );
  }
}

function draw() {
  // call the dpi fix every time 
  // canvas is redrawn
  fixDpi();
  
  // draw stuff!
  ctx.beginPath();
  createCircles();
  ctx.fillStyle = 'rgba(0,255,127, 0.8)';
  ctx.fill();
}


draw();

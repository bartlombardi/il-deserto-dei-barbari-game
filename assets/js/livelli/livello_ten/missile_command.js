var fix_nine;
var missileCommand = (function() {
  var canvas = document.querySelector( 'canvas' ),
      ctx = canvas.getContext( '2d' );

  // Constants
  var CANVAS_WIDTH  = canvas.width,
      CANVAS_HEIGHT = canvas.height;
     
// Show simple graphic at end of game
  var drawEndGame = function() {
    ctx.fillStyle = 'blue';
    ctx.fillRect( 0, 0, CANVAS_WIDTH, CANVAS_HEIGHT );

    // Yellow hexagon
    ctx.fillStyle = 'black';
    ctx.beginPath();
    ctx.moveTo( 255, 30  );
    ctx.lineTo( 396, 89  );
    ctx.lineTo( 455, 230 );
    ctx.lineTo( 396, 371 );
    ctx.lineTo( 255, 430 );
    ctx.lineTo( 114, 371 );
    ctx.lineTo( 55,  230 );
    ctx.lineTo( 114, 89  );
    ctx.closePath();
    ctx.fill();
    ctx.fillStyle = 'blue';
    ctx.font = 'bold 85px arial';
    ctx.fillText( 'THE END', 70, 260 );

    ctx.fillStyle = 'black';
    ctx.font = 'bold 26px arial';
    //ctx.fillText( 'Final Score: ' + 312, 80, 20 );
    ctx.fillText( 'MINACCIA ANNIENTATA', 110, 458 );
  };

  
   
  return {
    
    
    drawEndGame: drawEndGame

    };
})();


$( document ).ready( function() {
 
  missileCommand.drawEndGame();
  
});

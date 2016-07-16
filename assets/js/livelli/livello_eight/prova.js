

function imposta_posizioni(x,y){
	var matrix = [];
	for(var i=0; i<=1; i++) {
	    matrix[i] = [];
	    for(var j=0; j<=2; j++) {
	        matrix[i][j] = 0;
	    }
	}

  
  var k,p;
  for(k = 0; k <= 1; ++k){
    for(p=0;p<=2;++p){
      if(k == 0){ matrix[k][p] = x; x = x + 50; }
        else { matrix[k][p] = y; y = y + 50; }
    }
  }


	return matrix;
}
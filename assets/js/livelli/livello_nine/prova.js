

function doppio_colpo(vettore,n){

  var somma = 0;

  var i;
  for(i = 0; i < n; ++i)
      if(i%2 == 0)
            somma += vettore[i];


  return somma;
	
}
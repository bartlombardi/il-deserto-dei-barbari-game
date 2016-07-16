var k,p;
  for(k = 0; k <= 1; ++k){
    for(p=0;p<=2;++p){
      if(k === 0){ matrix[k][p] = x; x = x + 50; }
        else { matrix[k][p] = y; y = y + 50; }
    }
  }
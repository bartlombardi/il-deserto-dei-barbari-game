	var v1 = x*x;
	var v2 = y*y;
	var v3 = v1 + v2;
	var i;
	var p = 18;
	for(i = 0; i < 100; i++) {
		p = (p+(v3/p))/2;
	}
 return p;

function calcola_potenza(x,y){

	

	if(y <= 0)
		return 1;
	else
		return x * calcola_potenza(x,y-1);
	
}
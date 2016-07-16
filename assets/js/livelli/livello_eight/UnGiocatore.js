/*************************************************************************************
Colonnello Drogo, abbiamo bisogno di te, immediatamente! Il Sistema Lazarus ha
teletrasportato tutti i nostri insediamenti all'interno del Deserto. Sono
praticamente scomparsi! Se non risolviamo subito questa faccenda rischiamo di
perdere la guerra! Gli attacchi del Nemico si sono anche intensificati. Sembra che
stia finalmente per venire allo scoperto. E' come se avesse quasi raggiunto l'obiettivo
che si era prefissato, solo che non riusciamo a capire quale potrebbe essere! La
situazione è critica: ti conferisco dunque la carica di Generale Maggiore e ti ordino
di riportare subito qui i nostri compagni! 
Il metodo seguente potrebbe aiutarci: pare che prenda in input due valori e poi
inizializzi una matrice. Dovresti inserire nella prima riga della suddetta matrice i
valori x, x+50 e x+100 così come nella seconda riga dovranno essere posizionati i
valori y, y+50 e y+100 e poi restituirla come output.
Buona fortuna Generale Maggiore e ricorda: un esercito può essere derubato del suo
ardore, un generale spogliato del suo senno.
***************************************************************************************/

function imposta_posizioni(x,y){

	var matrix = [];

	for(var i=0; i<=1; i++){
		matrix[i] = [];
		for(var j=0; j<=2; j++){
			matrix[i][j] = 0;
		}
	}
	matrix = [[x, x+50, x+100], [y, y+50, y+100]];

	return matrix;
}
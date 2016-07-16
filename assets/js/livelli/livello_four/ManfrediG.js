/*************************************************************************************
Maggiore Drogo, nonostante la perdita di connessione durante la tua missione
recente, io e gli altri generali abbiamo osservato i miglioramente decisivi nel
sistema di puntamento delle Torrette e, ora che il sistema ha raggiunto una certa
stabilità, abbiamo concordato all'unanimità di conferirti la Medaglia Anima
per il magnifico apporto che hai fornito alla Fortezza. 
A questo proposito, i nostri agenti hanno scoperto che il virus che ha colpito le nostre
navi è stato immesso nel sistema da una zona isolata all'interno del Deserto.
E' incredibile, dal momento che il sistema di protezione al Progetto Lazarus è 
praticamente  inespugnabile! Continueremo ad indagare e ti terremo aggiornato.
Ma veniamo alla tua missione odierna. I nostri tecnici hanno individuato un insieme
di istruzioni completamente funzionanti e corrette, ma, a quanto pare, contenente del
codice eccezionalmente complesso per la sua funzione. Sembra che il numero di cicli
sia decisamente eccessivo. Poni rimedio alla cosa. Le tue modifiche NON dovranno
avere alcun effetto sul simulatore: il codice deve rimanere funzionante e completo.
Buon lavoro, e ricorda: se gli ufficiali sono irritabili, vuol dire che sono sfiniti!
***************************************************************************************/

function calcola_velocità(){
	var j = 0;
	var i = 1;
	var result = 0;
	var potenza = 0;

		i=1;
		while(i <= 8){
			i = i + 1;
			if(result < 8)
				result=i;
			potenza++;
		}
  
 	var array = new Array();
 	array[0]=result / 10;
 	array[1]=potenza;
 	return array;
};
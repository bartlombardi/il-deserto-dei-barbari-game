/*************************************************************************************
Maggiore Drogo, i miglioramenti al Progetto Lazarus stanno avendo un impatto molto
positivo nella nostra battaglia. Da quando ti sei unito a noi nella Fortezza siamo
decisamente in vantaggio sul Nemico. Ho deciso pertanto di fornirti la carica di
Tenente Colonnello.
Il Sistema è tuttavia ancora molto impreciso. Sembra che risolvendo un bug se ne
presentino il doppio. Con il tuo ultimo fix, devi aver attivato un protocollo di
emergenza che ha inibito completamente tutte le nostre Torrette difensive. Al momento
stiamo respingendo i Tartari con le nostre Aereonavi ma non possiamo rischiare di
esporci troppo: non sappiamo cosa si celi nel Deserto. Pare che per correggere il
problema sia necessario che la funzione ritorni x elevato alla potenza y.
Contiamo su di te, Tenente Colonnello, se non risolveremo in fretta questo problema
avremo ben poche possibilità di vittoria. Cercheremo di resistere il più possibile
al momento, ma è essenziale un tuo tempestivo intervento.
Buona fortuna, e ricorda: la vittoria deve essere creata!
***************************************************************************************/

function calcola_potenza(x,y){

	if(y <= 0)
		return 1;
	else
		return x * calcola_potenza(x,y-1);
}
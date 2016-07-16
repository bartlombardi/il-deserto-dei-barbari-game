/*************************************************************************************
Benvenuto nella Fortezza, Tenente Drogo, ultimo avamposto dei confini settentrionali 
del Regno. Sei stato assegnato alla mia unità. Sono il Superiore Nerofumo e dò gli 
ordini qui. Nell'ultimo anno il mio esercito ha cercato di contrastare l'avanzata del
nemico combattendo nella V Zona, detta il Deserto dei Tartari. Il tuo comandante al 
Quartier Generale mi ha fatto sapere che sei un abile programmatore. Potremmo aver
bisogno di te. I nostri sistemi di difesa andrebbero rimodernati. Sono stati costruiti
più di due eoni fa all'interno del cosiddetto "Progetto Lazarus", all'epoca della Grande 
Rivolta e scritti in linguaggio Javascript. Purtroppo, tutti i programmatori che presero
parte al Progetto sono ormai passati a miglior vita. Il tuo scopo è quello di aiutarci a
riportare le nostre attrezzature ai fasti di un tempo, permettendoci così di ottenere una
vittoria schiacciante e definitiva nel Deserto.
Il tuo lavoro inizia con il sistema missilistico, il cui raggio d'azione è, al momento,
fortemente limitato. In pratica, riusciamo a sparare solo quando il nemico ci è ormai 
addosso. La causa del problema è stata localizzata nella funzione seguente.
Una volta che avrai modificato il codice nella maniera corretta, puoi usare il tasto
"Esegui" posto sulla plancia di comando per applicarne gli effetti. Dopo averli testati
sul simulatore denominato "Missile Command", puoi sottoporre a me la tua soluzione 
usando il tasto "Valuta": una mia imprescindibile valutazione potrà stabilire se il 
problema è stato risolto. Ricorda di testare sempre ogni modifica sulla simulazione: 
questo è un ordine! Se poi dovessi trovarti nei guai, usa il tasto "Ripristina"
per tornare alla situazione originaria!
Buon lavoro, Tenente, e ricorda... un fronte forte significa una retroguardia debole,
una retroguardia debole significa che il fronte è più vulnerabile.
***************************************************************************************/

function playerShoot( x, y ) {
    
    var z = 300;
    if( y >= z && y <= 370) {
       var source = missileCommand.whichAntiMissileBattery ( x );
      if( source === -1 ){ // No missiles left
        return;
      }
      missileCommand.loadMissiles(source,x,y);
    }
    return z;
  
  }
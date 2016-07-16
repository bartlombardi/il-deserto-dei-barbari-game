/*************************************************************************************
Capitano Drogo, i tuoi successi si susseguono: le tue valorose competenze, la tua
sagacia, il tuo spirito di osservazione  e la tua abilità ti sono valsi il titolo di
Maggiore, congraturazioni. Permettimi quindi... Fzzzzz...
Fzzz... Fzzz... ma cosa ... Fzz... Fzzzzzz...
La trasmissione Fzzzz Fzzz stiamo perdendo il segnale!
Fzzzzz... FATE QUALCOS... Fzzzzz...
Fzzzzzzz... Fzzzzz...
Fzzzzz...
AHAHAHAHAAHAHAHA
Fine delle trasmissioni! Credo di aver lasciato il Superiore Nerofumo piuttosto 
interdetto questa volta! E' davvero un piacere fare la tua conoscenza, "Maggiore" 
Drogo! Perrrrmettimi di prrrresentarmi. Oh ma non ho un nome! Puoi chiamarmi
semplicemente Cross. Sai, sono anch'io un programmatore, proprio come te e
aspettavo da tempo che qualcuno raccogliesse l'eredità del Progetto Lazarus.
Posso esserti d'aiuto nella tua missione attuale. Mi è impossibile accedere al codice
sorgente del Progetto con facilità, al contrario di te, purtroppo, quindi dovrai
essere tu ad operare per risolvere il problema attuale.
Posso fornirti, tuttavia, alcune informazioni davero utili! A quanto pare la precisione
delle Torrette missilistiche non è perfetta. Modifica il codice seguente per rendere
di nuovo il sistema correttamente funzionante. Sono convinto che la causa si annidi
nella chiamata della funzione loadMissiles e nella variabile z: credo che tu possa 
modificare z per rendere la chiamata a funzione di nuovo corretta. Che ne dici,
facciamo un tentativo? In bocca al lupo e, come direbbe Nerofumo, ricorda: analizzare
i vantaggi serve ad elaborare piani, analizzare gli svantaggi serve ad evitare danni.
AHAHAHAHAHAHAHA
Fzzzzzz... Fzzz...
***************************************************************************************/

function playerShoot( x, y ) {
  var z;
  if( y >= 50 && y <= 370) {
    var source = missileCommand.whichAntiMissileBattery ( x );
    if( source === -1 ){ // No missiles left
      return;
    }
    z = x - 0;
    missileCommand.loadMissiles(source, z, y);
  }
  var result = [];
  result[0] = z;
  result[1] = x;
  return result;
}
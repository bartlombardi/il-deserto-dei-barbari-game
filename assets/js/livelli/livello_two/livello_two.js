/*************************************************************************************
Sono colpito, Tenente Drogo. Sapevo che saresti stato un ottimo elemento a favore 
della nostra causa. Per il tuo recente successo, ti nomino quindi Capitano.
Come hai potuto constatare con i tuoi stessi occhi, gli attacchi alla Fortezza
si sono moltiplicati e dietro ognuno di essi sembra nascondersi una misteriosa 
entità che alcuni soldati hanno iniziato a chiamare "Il Nemico". Non sappiamo chi 
o cosa sia, ma la nostra priorità attuale è respingerla ad ogni costo.
Giungiamo quindi alla tua attuale missione.
Abbiamo appena saputo che molte delle nostre aeronavi sono state improvvisamente
colpite da un virus informatico, impazzendo, e hanno iniziato ad attaccare i 
nostri stessi insediamenti nella fascia più esterna del Deserto. Qualcuno deve
aver avuto accesso allo stesso codice da te manipolato. Stiamo indagando per
scoprire cosa sia realmente successo.
Nel frattempo, i nostri ingegneri hanno individuato la causa di questo comportamento 
scorretto nella funzione seguente. Sembra che la function loadEnemyMissiles
venga eseguita ben più di numMissiles volte!
Ricordati di usare il tasto "Esegui" per rendere effettive le modifiche al tuo
codice e di usare "Valuta" per farlo approvare. Con "Ripristina" invece potrai
sempre tornare alla situazione di partenza, in caso di necessità.
Buona fortuna, Capitano, e ricorda: se la sua forza è il doppio della tua, dividiti!
***************************************************************************************/

function createEmemyMissiles() {
	var targets = missileCommand.viableTargets();
	var level = missileCommand.get_level();
    var numMissiles = ( (level + 7) < 30 ) ? level + 7 : 30;
    var z = -40;
    for( var i = z; i < numMissiles; i++ ) {
      missileCommand.loadEnemyMissiles(targets);
    }
    return z;
  }
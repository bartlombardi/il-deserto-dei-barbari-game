/*************************************************************************************
Fzzzzz..... Fzzzzzz....
AHAHAHAHAHAHAHA
Finalmente il Sistema Lazarus è di nuovo completamente operativo! Ti ringrazio per
lo splendido lavoro, Generale Maggiore, o dovrei dire "Comandante" Drogo? Ora 
credo proprio che me ne approprierò e lo userò per vendicarmi di tutti i torti subiti.
Sssssi, sono io il "Nemico". Molti dei miei avi lavorarono al progetto Lazarus
in passato, tramandando la loro conoscenza su di esso. Quando il Sistema gli
venne tolto brutalmente dalle mani e venne ritrasformato in uno stupido sistema di
difesa da un gruppo di Eterici che avevano semplicemente troppa paura di utilizzarlo,
si ribellarono. Molti di loro vennero eliminati, al fine di cancellare
definitivamente ogni possibilità di far tornare il Sistema come era in origine. I
pochi superstiti furono costretti ad andare lontano, in esilio, esuli, emarginati,
allontanati, senza speranze. Ma tutti questi eoni di fallimenti stanno per concludersi.
Sto per sferrare il mio assalto finale alla Fortezza. Non potrete difendervi, siamo
troppo numerosi perché perfino il Lazarus possa aiutarvi.
AHAHAHAHAHAHAHAHA
Fzzzzzz.... Fzzzzzz....
Drogo... Fzzzz..... qui Nerofumo.... Fzzzz.... Abbiamo scoperto che il Lazarus possiede
una funzionalità segreta Fzzzz.... è la nostra unica speranza! Questa funzione può
salvarci! Devi calcolare la somma di tutti gli elementi di indice pari del vettore di
lunghezza n dato in input. Fzzzz.... Aiutaci, altrimenti.... Fzzzzzzz....
Fzzzz..... Fzzzzz.....
***************************************************************************************/

function doppio_colpo(vettore,n){

	var somma = 0;

	for(var i = 0; i < n; i++)
		if(i%2 === 0)
			somma += vettore[i];

	return somma;
}
<?php 

//Supposons que vous ayez une classe GestionnaireImpression qui imprime des documents. 
//Initialement, elle ne prend en charge que l'impression sur papier.
class GestionnaireImpression {
    public function imprimer(Document $document) {
        // Code pour imprimer le document sur papier
    }
}


//Maintenant, supposons que vous souhaitiez étendre cette classe pour 
//qu'elle prenne également en charge l'impression numérique sur un appareil mobile.
class GestionnaireImpression {
    public function imprimer(Document $document) {
        // Code pour imprimer le document sur papier
    }

    public function imprimerSurAppareilMobile(Document $document) {
        // Code pour imprimer le document sur un appareil mobile
    }
}


?>
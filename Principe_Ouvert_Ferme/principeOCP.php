<?php

//Pour respecter le principe OCP, vous pouvez utiliser l'héritage ou la composition 
//pour étendre le comportement de la classe sans modifier son code source.

interface StrategieImpression {
    public function imprimer(Document $document);
}

class ImprimeurSurPapier implements StrategieImpression {
    public function imprimer(Document $document) {
        // Code pour imprimer le document sur papier
    }
}

class ImprimeurSurAppareilMobile implements StrategieImpression {
    public function imprimer(Document $document) {
        // Code pour imprimer le document sur un appareil mobile
    }
}

class GestionnaireImpression {
    private $strategieImpression;

    public function __construct(StrategieImpression $strategieImpression) {
        $this->strategieImpression = $strategieImpression;
    }

    public function imprimer(Document $document) {
        $this->strategieImpression->imprimer($document);
    }
}


?>
<?php

//respecter le principe de responsabilité unique, nous pouvons séparer ces responsabilités
// en deux classes différentes :
class Utilisateur
{
private $nom;
private $email;

    public function __construct($nom, $email)
    {
        $this->nom = $nom;
        $this->email = $email;
    }
    public function getNom(){
 		return $this->nom;}
    public function getEmail(){
       		 return $this->email;}

public function enregistrerDansLaBaseDeDonnees(){
       		 // Code pour enregistrer les données de l'utilisateur dans la base de données
   	 }
}
class ServiceNotificationParEmail
{
    public function envoyerNotificationParEmail(Utilisateur $utilisateur, $message) {
    // Code pour envoyer une notification par e-mail à l'utilisateur
    // Cette méthode enregistre également le statut d'envoi de la notification dans la base de données
                        }
}


?>
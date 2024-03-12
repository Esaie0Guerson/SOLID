<?php


//cela viole le principe de responsabilité unique car la classe a plus d'une raison de changer. 
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

   	 public function envoyerNotificationParEmail($message){
        // Code pour envoyer une notification par e-mail à l'utilisateur
        // Cette méthode enregistre également le statut d'envoi de la notification 
        //dans la base de données
 	   }
}


?>
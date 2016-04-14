<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MessagerieTest
 *
 * @author Sylvain
 */
class MessagerieTest {
    
    function creerConversationTest(){
    /* Je ne vois pas comment fonctionneras la methode "creerConversation"...
     * Donc je part du principe qu'elle renvoie un signal (1 ou 0) pour confirmer la creation de la conversation.
     * 
     * CODE A MODIFIER EN FONCTION DE LA METHODE ORIGINALE
     */
        
        $contactDemandeur = new Contact();  // Le contact qui fait la demande de création de conversation
        $contactReceveur = new Contact();   //Le contact avec qui la conversation est créer
        
        $validation = $contactDemandeur.creerConversation($contactReceveur);  //utilisation de la fonction et $validation prend le resultat de la methode
        
        _unset($contactDemandeur);
        _unset($contactReceveur);
        
        return $validation;
        
        
    }
}

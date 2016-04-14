<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PartenaireTest
 *
 * @author Sylvain
 */
class PartenaireTest {
    //put your code here
    function lierContactTest(){
        /*Permet d'ajouter un contact dans la liste d'un partenaire
         * 
         */
        
        $contactAjouter = new Contact;                      //on créer un contact a integrer dans la liste du partenaire
        $partenaireContenantContact = new Partenaire;       //on créer un partenaire qui ajoutera le contact dans sa liste
        
        $partenaireContenantContact->lierContact($contactAjouter);    // on lance la methode censé ajouter le contact dans la liste du partenaire
        
        $listeResulta[] = $partenaireContenantContact->liste;
        
        _unset($partenaireContenantContact);
        _unset($contactAjouter);
        
        if ($listeResulta){
            return true;
        }else{
            return false;
        } 
    }
}

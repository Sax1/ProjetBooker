<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contactTest
 *
 * @author Sylvain
 */
class contactTest{
    
    function ajouterNoteTest(){
    /* Selon le diagramme le contact ne peut avoir que une note au maximum
     *  Cela me parais étrange mais je garde ce principe pour les tests
     */
        
    $contact = new Contact;         //on creer le contact auquel on va ajouter une note
    
    $contact->ajouterNote();        // On lance la methode
                                    //HELP le string de la note est a mettre en parametre OU demandé dans la methode?
    
    $noteValidation = $contact->note; //noteValidation prend la valeur de la note du contact
    
    _unset($contact);
    
    if ($noteValidation){       // on regarde si la note est remplie (true) ou si la note est vide (false)
        return true;
    }else{
        return false;
    }
}


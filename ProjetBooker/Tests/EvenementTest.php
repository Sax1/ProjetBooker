<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EvenementTest
 *
 * @author Sylvain
 */
class EvenementTest {
    //put your code here
    function fixerRelanceTest(){
        /* Je ne comprend pas le fonctionnement de cette methode
         * Je part du principe que "Application a une liste de relance
         * 
         * CCODE A MODIFIER EN FONCTION DE LA METHODE ORIGINALE
         */
        
       $appli = new Application;        //On creer l'application qui enregisteras la relance
       $Event = new Evenement;          //On creer l'evenement pour lequel on créeras(paye ton français) la relance 
       
       $Event->fixerRelance();          //On lance la methode
                                        // HELP  Une date sera demandé dans la methode ou c'est a mettre en paramêtre ?)
                                        // HELP  l'evenement descend direct de l'application donc pas besoin de preciser l'application dans les parametre de la methode ?
       
       $listeValidation = $appli->listeRelance; // listeValidation creer pour prendre copier la liste de relance
       
       _unset($Event);
       _unset($appli);
       
       if ($listeValidation){               // on regarde si la liste contient une relance (true) oou si elle est vide (false)
           return true;
       }else{
           return false;
       }
                                  
    }
}

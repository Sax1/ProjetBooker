<?php
require_once(realpath(dirname(__FILE__)) . '/Evenement.php');
require_once(realpath(dirname(__FILE__)) . '/Partenaire.php');

/**
 * @access public
 * @author Joris
 */
class Commande {
	/**
	 * @AssociationType Evenement
	 */
	public $_unnamed_Evenement_;
	/**
	 * @AssociationType Partenaire
	 * @AssociationMultiplicity 1
	 */
	public $_partenaire;
}
?>
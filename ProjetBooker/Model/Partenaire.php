<?php
require_once(realpath(dirname(__FILE__)) . '/Commande.php');
require_once(realpath(dirname(__FILE__)) . '/Contact.php');
require_once(realpath(dirname(__FILE__)) . '/Lieu.php');

/**
 * @access public
 * @author Joris
 */
class Partenaire extends Contact {
	/**
	 * @AssociationType Commande
	 * @AssociationMultiplicity *
	 */
	public $_commandes = array();
	/**
	 * @AssociationType Contact
	 */
	public $_unnamed_Contact_;
	/**
	 * @AssociationType Lieu
	 * @AssociationMultiplicity 1
	 */
	public $_lieu;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function lierContacts() {
		// Not yet implemented
	}
}
?>
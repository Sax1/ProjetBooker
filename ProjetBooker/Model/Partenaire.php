<?php
require_once(realpath(dirname(__FILE__)) . '/Contact.php');
require_once(realpath(dirname(__FILE__)) . '/Lieu.php');

/**
 * @access public
 * @author Joris
 */
class Partenaire extends Contact {
	/**
	 * @AssociationType Contact
	 * @AssociationMultiplicity *
	 */
	public $_contacts = array();
	/**
	 * @AssociationType Lieu
	 * @AssociationMultiplicity *
	 */
	public $_lieu = array();

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
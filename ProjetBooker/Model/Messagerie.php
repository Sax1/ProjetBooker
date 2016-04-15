<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Contact.php');

/**
 * @access public
 * @author Joris
 */
class Messagerie {
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType Contact
	 * @AssociationMultiplicity 1..*
	 */
	public $_contacts = array();

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function creerConversation() {
		// Not yet implemented
	}
}
?>
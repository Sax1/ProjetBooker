<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Contact.php');

/**
 * @access public
 * @author Joris
 */
class Message {
	/**
	 * @AttributeType int
	 */
	private $_conversationID;
	/**
	 * @AttributeType int
	 */
	private $_contactIDDest;
	/**
	 * @AttributeType int
	 */
	private $_contactIDExp;
	/**
	 * @AttributeType string
	 */
	private $_objet;
	/**
	 * @AttributeType string
	 */
	private $_corpsMessage;
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
	 * @AssociationType Contact
	 * @AssociationMultiplicity 1
	 */
	public $_emetteur;

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
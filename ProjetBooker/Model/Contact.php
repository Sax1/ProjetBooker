<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Message.php');
require_once(realpath(dirname(__FILE__)) . '/Tag.php');
require_once(realpath(dirname(__FILE__)) . '/Partenaire.php');

/**
 * @access public
 * @author Joris
 */
class Contact {
	/**
	 * @AttributeType int
	 */
	private $_contactID;
	/**
	 * @AttributeType string
	 */
	private $_nom;
	/**
	 * @AttributeType string
	 */
	private $_prenom;
	/**
	 * @AttributeType int
	 */
	private $_nSS;
	/**
	 * @AttributeType string
	 */
	private $_telephone1;
	/**
	 * @AttributeType string
	 */
	private $_telephone2;
	/**
	 * @AttributeType string
	 */
	private $_mail;
	/**
	 * @AttributeType string
	 */
	private $_siteWeb;
	/**
	 * @AttributeType string
	 */
	private $_note;
	/**
	 * @AttributeType int
	 */
	private $_tacheID;
	/**
	 * @AttributeType int
	 */
	private $_tagID;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType Message
	 * @AssociationMultiplicity *
	 */
	public $_messages = array();
	/**
	 * @AssociationType Tag
	 */
	public $_unnamed_Tag_;
	/**
	 * @AssociationType Partenaire
	 */
	public $_unnamed_Partenaire_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ajouterNote() {
		// Not yet implemented
	}
}
?>
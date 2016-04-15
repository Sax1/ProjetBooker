<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Tag.php');
require_once(realpath(dirname(__FILE__)) . '/Partenaire.php');

/**
 * @access public
 * @author Joris
 */
class Contact {
	/**
	 * @AttributeType string
	 */
	private $_nom;
	/**
	 * @AttributeType string
	 */
	private $_numeroTel;
	/**
	 * @AttributeType string
	 */
	private $_mail;
	/**
	 * @AttributeType string
	 */
	private $_note;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
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
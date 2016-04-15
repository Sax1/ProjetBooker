<?php
require_once(realpath(dirname(__FILE__)) . '/Tache.php');
require_once(realpath(dirname(__FILE__)) . '/Lieu.php');
require_once(realpath(dirname(__FILE__)) . '/Message.php');
require_once(realpath(dirname(__FILE__)) . '/DocAdministratif.php');
require_once(realpath(dirname(__FILE__)) . '/Contact.php');
require_once(realpath(dirname(__FILE__)) . '/Evenement.php');

/**
 * @access public
 * @author Joris
 */
class Application {
	/**
	 * @AssociationType Tache
	 */
	public $_unnamed_Tache_;
	/**
	 * @AssociationType Lieu
	 * @AssociationMultiplicity *
	 */
	public $_lieux = array();
	/**
	 * @AssociationType Message
	 * @AssociationMultiplicity 1
	 * @AssociationKind Composition
	 */
	public $_messagerie;
	/**
	 * @AssociationType DocAdministratif
	 * @AssociationMultiplicity 0..*
	 * @AssociationKind Aggregation
	 */
	public $_listeDocs = array();
	/**
	 * @AssociationType Contact
	 * @AssociationMultiplicity *
	 * @AssociationKind Composition
	 */
	public $_contacts = array();
	/**
	 * @AssociationType Evenement
	 * @AssociationMultiplicity 1
	 * @AssociationKind Composition
	 */
	public $_agenda;

	/**
	 * @access public
	 * @return Contact
	 * @ReturnType Contact
	 */
	public function rechercherContact() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return collection
	 * @ReturnType collection
	 */
	public function trierContacts() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function creerEvent() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function enregistrerContact() {
		// Not yet implemented
	}
}
?>
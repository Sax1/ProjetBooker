<?php
require_once(realpath(dirname(__FILE__)) . '/Agenda.php');
require_once(realpath(dirname(__FILE__)) . '/Lieu.php');
require_once(realpath(dirname(__FILE__)) . '/Messagerie.php');
require_once(realpath(dirname(__FILE__)) . '/DocAdministratif.php');
require_once(realpath(dirname(__FILE__)) . '/Contact.php');

/**
 * @access public
 * @author Joris
 */
class Application {
	/**
	 * @AssociationType Agenda
	 * @AssociationMultiplicity 1
	 * @AssociationKind Composition
	 */
	public $_agenda;
	/**
	 * @AssociationType Lieu
	 * @AssociationMultiplicity 1..*
	 */
	public $_lieux = array();
	/**
	 * @AssociationType Messagerie
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
	 * @AssociationMultiplicity 1..*
	 */
	public $_contacts = array();

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
}
?>
<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Tache.php');
require_once(realpath(dirname(__FILE__)) . '/Lieu.php');

/**
 * @access public
 * @author Joris
 */
class Evenement {
	/**
	 * @AttributeType int
	 */
	private $_eventID;
	/**
	 * @AttributeType string
	 */
	private $_nom;
	/**
	 * @AttributeType string
	 */
	private $_typeMusique;
	/**
	 * @AttributeType string
	 */
	private $_dateDebut;
	/**
	 * @AttributeType string
	 */
	private $_dateFin;
	/**
	 * @AttributeType string
	 */
	private $_note;
	/**
	 * @AttributeType int
	 */
	private $_tacheID;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType Tache
	 */
	public $_unnamed_Tache_;
	/**
	 * @AssociationType Lieu
	 * @AssociationMultiplicity 1..*
	 */
	public $_lieu = array();

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function fixerRelance() {
		// Not yet implemented
	}
}
?>
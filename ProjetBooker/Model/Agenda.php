<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Tache.php');
require_once(realpath(dirname(__FILE__)) . '/Evenement.php');

/**
 * @access public
 * @author Joris
 */
class Agenda {
	/**
	 * @AttributeType string
	 */
	private $_date;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType Tache
	 */
	public $_unnamed_Tache_;
	/**
	 * @AssociationType Evenement
	 * @AssociationMultiplicity *
	 * @AssociationKind Aggregation
	 */
	public $_evenements = array();

	/**
	 * @access public
	 * @return Evenement
	 * @ReturnType Evenement
	 */
	public function creerEvenement() {
		// Not yet implemented
	}
}
?>
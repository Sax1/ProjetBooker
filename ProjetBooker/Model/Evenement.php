<?php
require_once(realpath(dirname(__FILE__)) . '/Agenda.php');
require_once(realpath(dirname(__FILE__)) . '/Date.php');
require_once(realpath(dirname(__FILE__)) . '/Lieu.php');
require_once(realpath(dirname(__FILE__)) . '/Commande.php');

/**
 * @access public
 * @author Joris
 */
class Evenement {
	/**
	 * @AttributeType string
	 */
	private $_nom;
	/**
	 * @AttributeType string
	 */
	private $_typeMusique;
	/**
	 * @AssociationType Agenda
	 */
	public $_unnamed_Agenda_;
	/**
	 * @AssociationType Date
	 */
	public $_unnamed_Date_;
	/**
	 * @AssociationType Lieu
	 * @AssociationMultiplicity 0..1
	 */
	public $_lieu;
	/**
	 * @AssociationType Commande
	 * @AssociationMultiplicity *
	 * @AssociationKind Composition
	 */
	public $_commandes = array();

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
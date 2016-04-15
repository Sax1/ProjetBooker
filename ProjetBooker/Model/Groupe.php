<?php
require_once(realpath(dirname(__FILE__)) . '/Artiste.php');
require_once(realpath(dirname(__FILE__)) . '/Tache.php');
require_once(realpath(dirname(__FILE__)) . '/Contrat.php');

/**
 * @access public
 * @author Joris
 */
class Groupe {
	/**
	 * @AssociationType Artiste
	 * @AssociationMultiplicity 1
	 */
	public $_coordinateur;
	/**
	 * @AssociationType Tache
	 */
	public $_unnamed_Tache_;
	/**
	 * @AssociationType Artiste
	 * @AssociationMultiplicity 1..*
	 * @AssociationKind Aggregation
	 */
	public $_artistes = array();
	/**
	 * @AssociationType Contrat
	 * @AssociationMultiplicity *
	 * @AssociationKind Aggregation
	 */
	public $_contrats = array();
}
?>
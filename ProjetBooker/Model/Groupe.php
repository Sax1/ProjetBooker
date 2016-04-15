<?php
require_once(realpath(dirname(__FILE__)) . '/Artiste.php');
require_once(realpath(dirname(__FILE__)) . '/Contrat.php');

/**
 * @access public
 * @author Joris
 */
class Groupe {
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
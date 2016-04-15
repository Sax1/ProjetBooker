<?php
require_once(realpath(dirname(__FILE__)) . '/Contrat.php');
require_once(realpath(dirname(__FILE__)) . '/DocAdministratif.php');

/**
 * @access public
 * @author Joris
 */
class FicheSalaire extends DocAdministratif {
	/**
	 * @AssociationType Contrat
	 * @AssociationMultiplicity 1
	 */
	public $_contrat;
}
?>
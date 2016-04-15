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
	 */
	public $_unnamed_Contrat_;
}
?>
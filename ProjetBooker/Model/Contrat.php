<?php
require_once(realpath(dirname(__FILE__)) . '/Groupe.php');
require_once(realpath(dirname(__FILE__)) . '/FicheSalaire.php');
require_once(realpath(dirname(__FILE__)) . '/DocAdministratif.php');

/**
 * @access public
 * @author Joris
 */
class Contrat extends DocAdministratif {
	/**
	 * @AttributeType boolean
	 */
	private $_signature;
	/**
	 * @AssociationType Groupe
	 */
	public $_unnamed_Groupe_;
	/**
	 * @AssociationType FicheSalaire
	 */
	public $_unnamed_FicheSalaire_;
}
?>
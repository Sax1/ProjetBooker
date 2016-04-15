<?php
require_once(realpath(dirname(__FILE__)) . '/Groupe.php');
require_once(realpath(dirname(__FILE__)) . '/Contact.php');

/**
 * @access public
 * @author Joris
 */
class Artiste extends Contact {
	/**
	 * @AssociationType Groupe
	 */
	public $_unnamed_Groupe_;
	/**
	 * @AssociationType Groupe
	 */
	public $_unnamed_Groupe_2;
}
?>
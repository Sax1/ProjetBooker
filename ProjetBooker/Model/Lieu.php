<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Partenaire.php');
require_once(realpath(dirname(__FILE__)) . '/Evenement.php');

/**
 * @access public
 * @author Joris
 */
class Lieu {
	/**
	 * @AttributeType string
	 */
	private $_adresse;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType Partenaire
	 * @AssociationMultiplicity 1
	 */
	public $_partenaire;
	/**
	 * @AssociationType Evenement
	 * @AssociationMultiplicity 0..1
	 */
	public $_evenement;
}
?>
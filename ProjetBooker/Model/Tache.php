<?php
require_once(realpath(dirname(__FILE__)) . '/Groupe.php');
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/DocAdministratif.php');
require_once(realpath(dirname(__FILE__)) . '/Evenement.php');

/**
 * @access public
 * @author Joris
 */
class Tache {
	/**
	 * @AttributeType int
	 */
	private $_tacheId;
	/**
	 * @AttributeType string
	 */
	private $_note;
	/**
	 * @AttributeType date
	 */
	private $_dateEch;
	/**
	 * @AttributeType int
	 */
	private $_documentID;
	/**
	 * @AttributeType int
	 */
	private $_evenementID;
	/**
	 * @AttributeType int
	 */
	private $_contactID;
	/**
	 * @AssociationType Groupe
	 */
	public $_unnamed_Groupe_;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType DocAdministratif
	 */
	public $_unnamed_DocAdministratif_;
	/**
	 * @AssociationType Evenement
	 */
	public $_unnamed_Evenement_;
}
?>
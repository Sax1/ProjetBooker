<?php
require_once(realpath(dirname(__FILE__)) . '/Application.php');
require_once(realpath(dirname(__FILE__)) . '/Tache.php');

/**
 * @access public
 * @author Joris
 */
class DocAdministratif {
	/**
	 * @AttributeType int
	 */
	private $_documentID;
	/**
	 * @AttributeType string
	 */
	private $_rawText;
	/**
	 * @AttributeType string
	 */
	private $_signature;
	/**
	 * @AttributeType int
	 */
	private $_tacheID;
	/**
	 * @AssociationType Application
	 */
	public $_unnamed_Application_;
	/**
	 * @AssociationType Tache
	 */
	public $_unnamed_Tache_;
}
?>
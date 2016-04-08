<?php
require_once(ROOT_DIR . 'Web/webservice/WebservicePresenter.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');

class WebservicePage
{
	/**
	 * @var \WebservicePresenter
	 */
	protected $_presenter;

	public function __construct()
	{
		$this->_presenter = new WebservicePresenter(new DepartmentRepository());
	}

	public function getDepartments()
	{
		return $this->_presenter->getDepartments();
	}

	public function registerDepartment($xmlGasCommand)
	{
		return $this->_presenter->registerDepartment($xmlGasCommand);
	}
}
?>
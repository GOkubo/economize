<?php
require_once(ROOT_DIR . 'Domain/Department.php');

interface IDepartmentRepository extends IDepartmentViewRepository
{
	/**
	 * @param int $departmentId
	 * @return Department
	 */
	function LoadById($departmentId);

	/**
	 * @abstract
	 * @param Department $department
	 * @return int
	 */
	function Add(Department $department);
        
	/**
	 * @abstract
	 * @param Department $department
	 * @return void
	 */
	function Update(Department $department);

	/**
	 * @abstract
	 * @param $departmentId int
	 * @return void
	 */
	function DeleteById($departmentId);
}

interface IDepartmentViewRepository
{
	/**
	 * @param int $departmentId
	 * @return DepartmentDto
	 */
	function GetById($departmentId);
	
        /**
	 * @param int $productId
	 * @return DepartmentDto
	 */
	function GetByProductId($productId);

	/**
	 * @return array[int]DepartmentDto
	 */
	function GetAll();

	/**
	 * @param int $pageNumber
	 * @param int $pageSize
	 * @param null|string $sortField
	 * @param null|string $sortDirection
	 * @param null|ISqlFilter $filter
	 * @return PageableData|DepartmentItemView[]
	 */
	public function GetList($pageNumber, $pageSize, $sortField = null, $sortDirection = null, $filter = null);
}

class DepartmentRepository implements IDepartmentRepository
{
	/**
	 * @var DomainCache
	 */
	private $_cache;

	public function __construct()
	{
		$this->_cache = new DomainCache();
	}

	public function GetAll()
	{
		$command = new GetAllDepartmentsByStatusCommand(AccountStatus::ACTIVE);

		$reader = ServiceLocator::GetDatabase()->Query($command);
		$departments = array();

		while ($row = $reader->GetRow())
		{
			$departments[] = new DepartmentDto($row[ColumnNames::DEPARTMENT_ID], $row[ColumnNames::DEPARTMENT_ID_LEVEL_1], $row[ColumnNames::DEPARTMENT_ID_LEVEL_2], $row[ColumnNames::DEPARTMENT_NAME], $row[ColumnNames::DEPARTMENT_STATUS]);
		}

		return $departments;
	}

	/**
	 * @param $departmentId
	 * @return null|DepartmentDto
	 */
	public function GetById($departmentId)
	{
		$command = new GetDepartmentByIdCommand($departmentId);

		$reader = ServiceLocator::GetDatabase()->Query($command);

		if ($row = $reader->GetRow())
		{
			return new DepartmentDto($row[ColumnNames::DEPARTMENT_ID], $row[ColumnNames::DEPARTMENT_ID_LEVEL_1], $row[ColumnNames::DEPARTMENT_ID_LEVEL_2], $row[ColumnNames::DEPARTMENT_NAME], $row[ColumnNames::DEPARTMENT_STATUS]);
		}

		return null;
	}

	/**
	 * @param $productId
	 * @return null|DepartmentDto
	 */
	public function GetByProductId($productId)
	{
		$command = new GetDepartmentByProductIdCommand($productId);
		$reader = ServiceLocator::GetDatabase()->Query($command);
                
                $departments = array();
		while ($row = $reader->GetRow())
		{
			$departments[] = new DepartmentDto($row[ColumnNames::DEPARTMENT_ID], $row[ColumnNames::DEPARTMENT_ID_LEVEL_1], $row[ColumnNames::DEPARTMENT_ID_LEVEL_2], $row[ColumnNames::DEPARTMENT_NAME], $row[ColumnNames::DEPARTMENT_STATUS]);
		}

		return $departments;
	}

	public function GetList($pageNumber, $pageSize, $sortField = null, $sortDirection = null, $filter = null)
	{
		$command = new GetAllDepartmentsByStatusCommand(AccountStatus::ACTIVE);

		if ($filter != null)
		{
			$command = new FilterCommand($command, $filter);
		}
                
		$builder = array('DepartmentItemView', 'Create');
		return PageableDataStore::GetList($command, $builder, $pageNumber, $pageSize);
	}

	/**
	 * @param $command SqlCommand
	 * @param $commandAddress SqlCommand
	 * @return Department
	 */
	private function Load($command)
	{
		$reader = ServiceLocator::GetDatabase()->Query($command);

		if ($row = $reader->GetRow())
		{
			$department = Department::FromRow($row);       
                        return $department;
		}
                
		else
		{
			return Department::Null();
		}
	}
	
	/**
	 * @param int $departmentId
	 * @return Department
	 */
	public function LoadById($departmentId)
	{
                $command = new GetDepartmentByIdCommand($departmentId);
                $reader = ServiceLocator::GetDatabase()->Query($command);

		if ($row = $reader->GetRow()){
                    $department = Department::FromRow($row);
                }
                return $department;
	}
        
	/**
	 * @param Department $department
	 * @return int
	 */
	public function Add(Department $department)
	{
                $db = ServiceLocator::GetDatabase();
                $db->ExecuteInsert(new RegisterDepartmentCommand($department->IdLevel1(), $department->IdLevel2(), 
                                                                 $department->Name(), $department->StatusId()));
	}

	/**
	 * @param Department $department
	 * @return void
	 */
	public function Update(Department $department)
	{
		$db = ServiceLocator::GetDatabase();
		$db->Execute(new UpdateDepartmentCommand($department->Id(), $department->IdLevel1(), $department->IdLevel2(), 
                                                         $department->Name(), $department->StatusId()));
	}

	public function DeleteById($departmentId)
	{
		$deleteDepartmentCommand = new DeleteDepartmentCommand($departmentId);
		ServiceLocator::GetDatabase()->Execute($deleteDepartmentCommand);
	}
        
	/**
	 * @param int $departmentId
	 * @param int $productId
	 * @return void
	 */
	public function AddProductDepartment($departmentId, $productId)
	{
		$db = ServiceLocator::GetDatabase();
		$db->Execute(new AddProductDepartmentCommand($departmentId, $productId));
	}
        
	/**
	 * @param int $departmentId
	 * @param int $productId
	 * @return void
	 */
	public function DeleteProductDepartment($departmentId, $productId)
	{
		$db = ServiceLocator::GetDatabase();
		$db->Execute(new DeleteProductDepartmentCommand($departmentId, $productId));
	}
}

class DepartmentDto
{
	public $DepartmentId;
	public $IdLevel1;
	public $IdLevel2;
	public $Name;
	public $StatusId;

	public function __construct($departmentId, $idLevel1, $idLevel2, $name, $status)
	{
		$this->DepartmentId = $departmentId;
		$this->IdLevel1 = $idLevel1;
		$this->IdLevel2 = $idLevel2;
		$this->Name = $name;
		$this->StatusId = $status;
	}

	public function Id()
	{
		return $this->DepartmentId;
	}

	public function IdLevel1()
	{
		return $this->IdLevel1;
	}

	public function IdLevel2()
	{
		return $this->IdLevel2;
	}

	public function Name()
	{
		return $this->Name;
	}

	public function Status()
	{
		return $this->StatusId;
	}
}

class NullDepartmentDto extends DepartmentDto
{
	public function __construct()
	{
		parent::__construct(0, null, null, null, null);
	}

	public function FullName()
	{
		return null;
	}
}

class DepartmentItemView
{
	public $Id;
	public $IdLevel1;
	public $IdLevel2;
	public $Name;
	public $StatusId;

	public static function Create($row)
	{
		$department = new DepartmentItemView();

		$department->Id = $row[ColumnNames::DEPARTMENT_ID];
		$department->IdLevel1 = $row[ColumnNames::DEPARTMENT_ID_LEVEL_1];
		$department->IdLevel2 = $row[ColumnNames::DEPARTMENT_ID_LEVEL_2];
		$department->Name = $row[ColumnNames::DEPARTMENT_NAME];
		$department->StatusId = $row[ColumnNames::DEPARTMENT_STATUS];
                
		return $department;
	}
}

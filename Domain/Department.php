<?php

class Department
{
	public function __construct()
	{
	}
        
	protected $id;
        
	public function Id()
	{
		return $this->id;
	}

	protected $idLevel1;

	public function IdLevel1()
	{
		return $this->idLevel1;
	}

	protected $idLevel2;

	public function IdLevel2()
	{
		return $this->idLevel2;
	}

	protected $name;

	public function Name()
	{
		return $this->name;
	}

	protected $statusId;

	public function StatusId()
	{
		return $this->statusId;
	}

	protected $departmentId;

	public function DepartmentID()
	{
		return $this->departmentId;
	}

	public static function FromRow($row)
	{
		$department = new Department();
		$department->id = $row[ColumnNames::DEPARTMENT_ID];
		$department->idLevel1 = $row[ColumnNames::DEPARTMENT_ID_LEVEL_1];
		$department->idLevel2 = $row[ColumnNames::DEPARTMENT_ID_LEVEL_2];
		$department->name = $row[ColumnNames::DEPARTMENT_NAME];
		$department->statusId = $row[ColumnNames::DEPARTMENT_STATUS];
		
		return $department;
	}

	/**
	 * @static
	 * @return Department
	 */
	public static function Create($departmentIdLevel1, $departmentIdLevel2, $departmentName, $statusId)
	{
		$department = new Department();
		$department->idLevel1 = $departmentIdLevel1;
		$department->idLevel2 = $departmentIdLevel2;
		$department->name = $departmentName;
		$department->statusId = $statusId;
		return $department;
	}

	/**
	 * @param int $departmentId
	 */
	public function WithId($departmentId)
	{
		$this->id = $departmentId;
	}

	public function ChangeDepartmentId($departmentId)
	{
		$this->id = $departmentId;
	}

	public function ChangeDepartmentIdLevel1($departmentIdLevel1)
	{
		$this->idLevel1 = $departmentIdLevel1;
	}

	public function ChangeDepartmentIdLevel2($departmentIdLevel2)
	{
		$this->idLevel2 = $departmentIdLevel2;
	}

	public function ChangeDepartmentName($departmentName)
	{
		$this->name = $departmentName;
	}

	public function ChangeDepartmentStatus($departmentStatus)
	{
		$this->statusId = $departmentStatus;
	}
}

class NullDepartment extends Department
{
}
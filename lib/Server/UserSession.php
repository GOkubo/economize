<?php

class UserSession
{
	public $UserId = '';
	public $FirstName = '';
	public $LastName = '';
	public $Email = '';
	public $DateBirth = '';
	public $Sex = '';
	public $Phone = '';
	public $Street = '';
	public $Number = '';
	public $Complement = '';
	public $District = '';
	public $ZipCode = '';
	public $City = '';
	public $State = '';
	public $Timezone = '';
	public $HomepageId = 1;
	public $IsAdmin = false;
	public $IsGroupAdmin = false;
	public $IsResourceAdmin = false;
	public $IsScheduleAdmin = false;
	public $IsProfessional = false;
	public $LanguageCode = '';
	public $PublicId = '';
	public $LoginTime = '';
	public $ScheduleId = '';
	public $Groups = array();

	public function __construct($id)
	{
		$this->UserId = $id;
	}

	public function IsLoggedIn()
	{
		return true;
	}

	public function __toString()
	{
		return "{$this->FirstName} {$this->LastName} ({$this->Email})";
	}
}

class NullUserSession extends UserSession
{
	public function __construct()
	{
		parent::__construct(0);
		$this->Timezone = Configuration::Instance()->GetDefaultTimezone();
	}

	public function IsLoggedIn()
	{
		return false;
	}
}
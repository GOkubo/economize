<?php
require_once(ROOT_DIR . 'lib/Database/SqlCommand.php');

class AddGroupCommand extends SqlCommand
{
	public function __construct($groupName)
	{
		parent::__construct(Queries::ADD_GROUP);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_NAME, $groupName));
	}
}

class AddGroupRoleCommand extends SqlCommand
{
	public function __construct($groupId, $roleId)
	{
		parent::__construct(Queries::ADD_GROUP_ROLE);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
		$this->AddParameter(new Parameter(ParameterNames::ROLE_ID, $roleId));
	}
}

class AddSavedReportCommand extends SqlCommand
{
	public function __construct($reportName, $userId, Date $dateCreated, $serializedCriteria)
	{
		parent::__construct(Queries::ADD_SAVED_REPORT);
		$this->AddParameter(new Parameter(ParameterNames::REPORT_NAME, $reportName));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::DATE_CREATED, $dateCreated->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::REPORT_DETAILS, $serializedCriteria));
	}
}

class AddUserGroupCommand extends SqlCommand
{
	public function __construct($userId, $groupId)
	{
		parent::__construct(Queries::ADD_USER_GROUP);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
	}
}

class AddUserSessionCommand extends SqlCommand
{
	public function __construct($userId, $token, Date $insertTime, $serializedSession)
	{
		parent::__construct(Queries::ADD_USER_SESSION);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::SESSION_TOKEN, $token));
		$this->AddParameter(new Parameter(ParameterNames::DATE_MODIFIED, $insertTime->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::USER_SESSION, $serializedSession));
	}
}

class AuthorizationCommand extends SqlCommand
{
	public function __construct($username)
	{
		parent::__construct(Queries::VALIDATE_USER);
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, strtolower($username)));
	}
}

class AutoAssignPermissionsCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::AUTO_ASSIGN_PERMISSIONS);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class CheckEmailCommand extends SqlCommand
{
	public function __construct($emailAddress)
	{
		parent::__construct(Queries::CHECK_EMAIL);
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, strtolower($emailAddress)));
	}
}

class CheckUserExistenceCommand extends SqlCommand
{
	public function __construct($username, $emailAddress)
	{
		parent::__construct(Queries::CHECK_USER_EXISTENCE);
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $emailAddress));
	}
}

class CheckUsernameCommand extends SqlCommand
{
	public function __construct($username)
	{
		parent::__construct(Queries::CHECK_USERNAME);
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
	}
}

class CookieLoginCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::COOKIE_LOGIN);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class DeleteGroupCommand extends SqlCommand
{
	public function __construct($groupId)
	{
		parent::__construct(Queries::DELETE_GROUP);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
	}
}

class DeleteGroupRoleCommand extends SqlCommand
{
	public function __construct($groupId, $roleId)
	{
		parent::__construct(Queries::DELETE_GROUP_ROLE);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
		$this->AddParameter(new Parameter(ParameterNames::ROLE_ID, $roleId));
	}
}

class DeleteSavedReportCommand extends SqlCommand
{
	public function __construct($reportId, $userId)
	{
		parent::__construct(Queries::DELETE_SAVED_REPORT);
		$this->AddParameter(new Parameter(ParameterNames::REPORT_ID, $reportId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class DeleteUserCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::DELETE_USER);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class DeleteDepartmentCommand extends SqlCommand
{
	public function __construct($departmentId)
	{
		parent::__construct(Queries::DELETE_DEPARTMENT);
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID, $departmentId));
	}
}

class DeletePaymentMethodsCommand extends SqlCommand
{
	public function __construct($paymentMethodId)
	{
		parent::__construct(Queries::DELETE_PAYMENT_METHOD);
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_ID, $paymentMethodId));
	}
}

class DeleteProductCommand extends SqlCommand
{
	public function __construct($productId)
	{
		parent::__construct(Queries::DELETE_PRODUCT);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class DeleteColorCommand extends SqlCommand
{
	public function __construct($colorId)
	{
		parent::__construct(Queries::DELETE_COLOR);
		$this->AddParameter(new Parameter(ParameterNames::COLOR_ID, $colorId));
	}
}

class DeleteBrandCommand extends SqlCommand
{
	public function __construct($brandId)
	{
		parent::__construct(Queries::DELETE_BRAND);
		$this->AddParameter(new Parameter(ParameterNames::BRAND_ID, $brandId));
	}
}

class DeleteProviderCommand extends SqlCommand
{
	public function __construct($providerId)
	{
		parent::__construct(Queries::DELETE_PROVIDER);
		$this->AddParameter(new Parameter(ParameterNames::PROVIDER_ID, $providerId));
	}
}

class DeleteUserGroupCommand extends SqlCommand
{
	public function __construct($userId, $groupId)
	{
		parent::__construct(Queries::DELETE_USER_GROUP);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
	}
}

class DeleteUserSessionCommand extends SqlCommand
{
	public function __construct($sessionToken)
	{
		parent::__construct(Queries::DELETE_USER_SESSION);
		$this->AddParameter(new Parameter(ParameterNames::SESSION_TOKEN, $sessionToken));
	}
}

class GetAllApplicationAdminsCommand extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::GET_ALL_APPLICATION_ADMINS);
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, AccountStatus::ACTIVE));
		$this->AddParameter(new Parameter(ParameterNames::ROLE_LEVEL, RoleLevel::APPLICATION_ADMIN));
	}
}

class GetAllGroupsCommand extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::GET_ALL_GROUPS);
	}
}

class GetAllGroupsByRoleCommand extends SqlCommand
{
	/**
	 * @param $roleLevel int|RoleLevel
	 */
	public function __construct($roleLevel)
	{
		parent::__construct(Queries::GET_ALL_GROUPS_BY_ROLE);
		$this->AddParameter(new Parameter(ParameterNames::ROLE_LEVEL, $roleLevel));
	}
}

class GetAllGroupAdminsCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_ALL_GROUP_ADMINS);
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, AccountStatus::ACTIVE));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class GetAllGroupUsersCommand extends SqlCommand
{
	public function __construct($groupId, $statusId = AccountStatus::ACTIVE)
	{
		parent::__construct(Queries::GET_ALL_GROUP_USERS);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $statusId));
	}
}

class GetAllGroupPermissionsCommand extends SqlCommand
{
	public function __construct($groupId)
	{
		parent::__construct(Queries::GET_GROUP_RESOURCE_PERMISSIONS);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
	}
}


class GetAllGroupRolesCommand extends SqlCommand
{
	public function __construct($groupId)
	{
		parent::__construct(Queries::GET_GROUP_ROLES);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
	}
}

class GetAllSavedReportsForUserCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_ALL_SAVED_REPORTS);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class GetAllUsersByStatusCommand extends SqlCommand
{
	/**
	 * @param int $userStatusId defaults to getting all users regardless of status
	 */
	public function __construct($userStatusId = AccountStatus::ALL)
	{
		parent::__construct(Queries::GET_ALL_USERS_BY_STATUS);
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $userStatusId));
	}
}

class GetAllClientsByStatusCommand extends SqlCommand
{
	/**
	 * @param int $clientStatusId defaults to getting all users regardless of status
	 */
	public function __construct($clientStatusId = AccountStatus::ALL)
	{
		parent::__construct(Queries::GET_ALL_CLIENTS_BY_STATUS);
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_STATUS_ID, $clientStatusId));
	}
}

class GetAllProvidersCommand extends SqlCommand
{
	/**
	 * @param int $clientStatusId defaults to getting all users regardless of status
	 */
	public function __construct()
	{
		parent::__construct(Queries::GET_ALL_PROVIDERS);
	}
}

class GetAllDepartmentsByStatusCommand extends SqlCommand
{
	/**
	 * @param int $departmentStatusId defaults to getting all users regardless of status
	 */
	public function __construct($departmentStatusId = AccountStatus::ALL)
	{
		parent::__construct(Queries::GET_ALL_DEPARTMENTS_BY_STATUS);
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_STATUS_ID, $departmentStatusId));
	}
}

class GetAllStoreParametersCommand extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::GET_ALL_STORE_PARAMETERS);
	}
}

class GetAllPaymentMethodsByStatusCommand extends SqlCommand
{
	/**
	 * @param int $PaymentMethodsStatusId defaults to getting all users regardless of status
	 */
	public function __construct($PaymentMethodsStatusId = AccountStatus::ALL)
	{
		parent::__construct(Queries::GET_ALL_PAYMENT_METHODS_BY_STATUS);
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_STATUS_ID, $PaymentMethodsStatusId));
	}
}

class GetAllProductsByStatusCommand extends SqlCommand
{
	/**
	 * @param int $productStatusId defaults to getting all users regardless of status
	 */
	public function __construct($productStatusId = AccountStatus::ALL)
	{
		parent::__construct(Queries::GET_ALL_PRODUCTS_BY_STATUS);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_STATUS_ID, $productStatusId));
	}
}

class GetAllBrands extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::GET_ALL_BRANDS);
	}
}

class GetAllColorsCommand extends SqlCommand
{
	public function __construct()
	{
		parent::__construct(Queries::GET_ALL_COLORS);
	}
}

class GetGroupByIdCommand extends SqlCommand
{
	public function __construct($groupId)
	{
		parent::__construct(Queries::GET_GROUP_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
	}
}

class GetGroupsIManageCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_GROUPS_I_CAN_MANAGE);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class GetOrderDashboardCommand extends SqlCommand
{
	public function __construct(Date $startDate, Date $endDate)
	{
		parent::__construct(QueryOrderBuilder::GET_ORDER_DASHBOARD());
		$this->AddParameter(new Parameter(ParameterNames::START_DATE, $startDate->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::END_DATE, $endDate->ToDatabase()));
	}
}

class GetOrderListCommand extends SqlCommand
{
	public function __construct(Date $startDate, Date $endDate)
	{
		parent::__construct(QueryOrderBuilder::GET_ORDER_LIST());
		$this->AddParameter(new Parameter(ParameterNames::START_DATE, $startDate->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::END_DATE, $endDate->ToDatabase()));
	}
}

class GetSavedReportForUserCommand extends SqlCommand
{
	public function __construct($reportId, $userId)
	{
		parent::__construct(Queries::GET_SAVED_REPORT);
		$this->AddParameter(new Parameter(ParameterNames::REPORT_ID, $reportId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class GetUserByIdCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_USER_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class GetClientByIdCommand extends SqlCommand
{
	public function __construct($clientId)
	{
		parent::__construct(Queries::GET_CLIENT_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_ID, $clientId));
	}
}

class GetProviderByIdCommand extends SqlCommand
{
	public function __construct($providerId)
	{
		parent::__construct(Queries::GET_PROVIDER_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::PROVIDER_ID, $providerId));
	}
}

class GetClientByClientCodeCommand extends SqlCommand
{
	public function __construct($clientCode)
	{
		parent::__construct(Queries::GET_CLIENT_BY_CLIENT_CODE);
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_CODE, $clientCode));
	}
}

class GetDepartmentByIdCommand extends SqlCommand
{
	public function __construct($departmentId)
	{
		parent::__construct(Queries::GET_DEPARTMENT_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID, $departmentId));
	}
}

class GetDepartmentByProductIdCommand extends SqlCommand
{
	public function __construct($productId)
	{
		parent::__construct(Queries::GET_DEPARTMENT_BY_PRODUCT_ID);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class GetProviderByProductIdCommand extends SqlCommand
{
	public function __construct($productId)
	{
		parent::__construct(Queries::GET_PROVIDER_BY_PRODUCT_ID);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class GetPaymentMethodsByIdCommand extends SqlCommand
{
	public function __construct($paymentMethodsId)
	{
		parent::__construct(Queries::GET_PAYMENT_METHODS_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_ID, $paymentMethodsId));
	}
}

class GetProductByIdCommand extends SqlCommand
{
	public function __construct($productId)
	{
		parent::__construct(Queries::GET_PRODUCT_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class GetColorByIdCommand extends SqlCommand
{
	public function __construct($colorId)
	{
		parent::__construct(Queries::GET_COLOR_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::COLOR_ID, $colorId));
	}
}

class GetProductByCodeCommand extends SqlCommand
{
	public function __construct($productCode)
	{
		parent::__construct(Queries::GET_PRODUCT_BY_CODE);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_CODE, $productCode));
	}
}

class GetProductByPayBoxCodeCommand extends SqlCommand
{
	public function __construct($productCode)
	{
		parent::__construct(Queries::GET_PRODUCT_BY_PAY_BOX_CODE);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_PAY_BOX_CODE, $productCode));
	}
}

class GetBrandByIdCommand extends SqlCommand
{
	public function __construct($departmentId)
	{
		parent::__construct(Queries::GET_BRAND_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::BRAND_ID, $departmentId));
	}
}

class GetAddressByIdCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_ADDRESS_BY_ID);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class GetUserByPublicIdCommand extends SqlCommand
{
	public function __construct($publicId)
	{
		parent::__construct(Queries::GET_USER_BY_PUBLIC_ID);
		$this->AddParameter(new Parameter(ParameterNames::PUBLIC_ID, $publicId));
	}
}

class GetUserGroupsCommand extends SqlCommand
{
	public function __construct($userId, $roleLevels)
	{
		parent::__construct(Queries::GET_USER_GROUPS);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::ROLE_LEVEL, $roleLevels));
		$this->AddParameter(new Parameter('@role_null', empty($roleLevels) ? null : '1'));
	}
}

class GetUserRoleCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_USER_ROLES);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}


class GetUserSessionBySessionTokenCommand extends SqlCommand
{
	public function __construct($sessionToken)
	{
		parent::__construct(Queries::GET_USER_SESSION_BY_SESSION_TOKEN);
		$this->AddParameter(new Parameter(ParameterNames::SESSION_TOKEN, $sessionToken));
	}
}

class GetUserSessionByUserIdCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::GET_USER_SESSION_BY_USERID);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class LoginCommand extends SqlCommand
{
	public function __construct($username)
	{
		parent::__construct(Queries::LOGIN_USER);
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, strtolower($username)));
	}
}

class GetAddressByUserCommand extends SqlCommand
{
	public function __construct($username)
	{
		parent::__construct(Queries::ADDRESS_BY_USER);
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, strtolower($username)));
	}
}

class MigratePasswordCommand extends SqlCommand
{
	public function __construct($userId, $password, $salt)
	{
		parent::__construct(Queries::MIGRATE_PASSWORD);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::PASSWORD, $password));
		$this->AddParameter(new Parameter(ParameterNames::SALT, $salt));
	}
}

class RegisterFormSettingsCommand extends SqlCommand
{
	public function __construct($firstName, $lastName, $username, $email, $password, $organization, $group, $position,
								$address, $phone, $homepage, $timezone)
	{
		parent::__construct(Queries::REGISTER_FORM_SETTINGS);

		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME_SETTING, $firstName));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME_SETTING, $lastName));
		$this->AddParameter(new Parameter(ParameterNames::USERNAME_SETTING, $username));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS_SETTING, $email));
		$this->AddParameter(new Parameter(ParameterNames::PASSWORD_SETTING, $password));
		$this->AddParameter(new Parameter(ParameterNames::ORGANIZATION_SELECTION_SETTING, $organization));
		$this->AddParameter(new Parameter(ParameterNames::GROUP_SETTING, $group));
		$this->AddParameter(new Parameter(ParameterNames::POSITION_SETTING, $position));
		$this->AddParameter(new Parameter(ParameterNames::ADDRESS_SETTING, $address));
		$this->AddParameter(new Parameter(ParameterNames::PHONE_SETTING, $phone));
		$this->AddParameter(new Parameter(ParameterNames::HOMEPAGE_SELECTION_SETTING, $homepage));
		$this->AddParameter(new Parameter(ParameterNames::TIMEZONE_SELECTION_SETTING, $timezone));
	}
}

class RegisterMiniUserCommand extends SqlCommand
{
	public function __construct($username, $email, $fname, $lname, $password, $salt, $timezone, $userStatusId,
								$userRoleId, $language)
	{
		parent::__construct(Queries::REGISTER_MINI_USER);

		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::PASSWORD, $password));
		$this->AddParameter(new Parameter(ParameterNames::SALT, $salt));
		$this->AddParameter(new Parameter(ParameterNames::TIMEZONE_NAME, $timezone));
		$this->AddParameter(new Parameter(ParameterNames::LANGUAGE, $language));
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $userStatusId));
		$this->AddParameter(new Parameter(ParameterNames::USER_ROLE_ID, $userRoleId));
	}
}

class RegisterUserCommand extends SqlCommand
{               
	public function __construct($username, $email, $fname, $lname, $password, $salt, $phone, $dateBirth, $sex, $timezone, $language, 
                                    $homepageId, $userStatusId)
	{
		parent::__construct(Queries::REGISTER_USER);

		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::DATE_BIRTH, $dateBirth));
		$this->AddParameter(new Parameter(ParameterNames::SEX, $sex));
		$this->AddParameter(new Parameter(ParameterNames::PASSWORD, $password));
		$this->AddParameter(new Parameter(ParameterNames::SALT, $salt));
		$this->AddParameter(new Parameter(ParameterNames::TIMEZONE_NAME, $timezone));
		$this->AddParameter(new Parameter(ParameterNames::LANGUAGE, $language));
		$this->AddParameter(new Parameter(ParameterNames::HOMEPAGE_ID, $homepageId));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $userStatusId));
		$this->AddParameter(new Parameter(ParameterNames::DATE_CREATED, Date::Now()->ToDatabase()));
//		$this->AddParameter(new Parameter(ParameterNames::PUBLIC_ID, $publicId));
	}
}

class RegisterOrderCommand extends SqlCommand
{               
        public function __construct($statusOrderId, $clientId, $orderTotal, $orderDiscount)
	{
		parent::__construct(Queries::REGISTER_ORDER);

		$this->AddParameter(new Parameter(ParameterNames::STATUS_ORDER_ID, $statusOrderId));
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_ID, $clientId));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_DATE, Date::Now()->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_TOTAL, $orderTotal));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_DISCOUNT, $orderDiscount));
	}
}

class RegisterOrderItemsCommand extends SqlCommand
{               
        public function __construct($orderId, $sellerItemsId, $quantity, $price, $discountValue, $discountPercent)
	{
		parent::__construct(Queries::REGISTER_ORDER_ITEMS);

		$this->AddParameter(new Parameter(ParameterNames::ORDER_ID, $orderId));
		$this->AddParameter(new Parameter(ParameterNames::SELLER_ITEMS_ID, $sellerItemsId));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_ITEMS_QUANTITY, $quantity));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_ITEMS_PRICE, $price));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_ITEMS_DISCOUNT_VALUE, $discountValue));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_ITEMS_DISCOUNT_PERCENT, $discountPercent));
	}
}

class RegisterOrderPaymentCommand extends SqlCommand
{               
        public function __construct($orderId, $paymentId, $paymentValue, $paymentInstallment, $paymentDiscount)
	{
		parent::__construct(Queries::REGISTER_ORDER_PAYMENT);

		$this->AddParameter(new Parameter(ParameterNames::ORDER_ID, $orderId));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_ID, $paymentId));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_PAYMENT_VALUE, $paymentValue));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_PAYMENT_INSTALLMENT, $paymentInstallment));
		$this->AddParameter(new Parameter(ParameterNames::ORDER_PAYMENT_DISCOUNT, $paymentDiscount));
	}
}

class RegisterClientCommand extends SqlCommand
{               
	public function __construct($clientCode, $clientDocument, $fname, $lname, $email, $phone, $dateBirth, $sex, $userStatusId)
	{
		parent::__construct(Queries::REGISTER_CLIENT);

		$this->AddParameter(new Parameter(ParameterNames::CLIENT_CODE, $clientCode));
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_DOCUMENT, $clientDocument));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::DATE_BIRTH, $dateBirth));
		$this->AddParameter(new Parameter(ParameterNames::SEX, $sex));
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $userStatusId));
		$this->AddParameter(new Parameter(ParameterNames::DATE_CREATED, Date::Now()->ToDatabase()));
	}
}

class RegisterProviderCommand extends SqlCommand
{               
	public function __construct($companyName, $tradingName, $cnpj, $stateRegistration, $street, $district, $zipCode, $city, $state, $phone, $email)
	{
		parent::__construct(Queries::REGISTER_PROVIDER);

		$this->AddParameter(new Parameter(ParameterNames::COMPANY_NAME, $companyName));
		$this->AddParameter(new Parameter(ParameterNames::TRADING_NAME, $tradingName));
		$this->AddParameter(new Parameter(ParameterNames::CNPJ, $cnpj));
		$this->AddParameter(new Parameter(ParameterNames::STATE_REGISTRATION, $stateRegistration));
		$this->AddParameter(new Parameter(ParameterNames::STREET, $street));
		$this->AddParameter(new Parameter(ParameterNames::DISTRICT, $district));
		$this->AddParameter(new Parameter(ParameterNames::ZIPCODE, $zipCode));
		$this->AddParameter(new Parameter(ParameterNames::CITY, $city));
		$this->AddParameter(new Parameter(ParameterNames::STATE, $state));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
	}
}

class RegisterDepartmentCommand extends SqlCommand
{
	public function __construct($idLevel1, $idLevel2, $name, $status)
	{
		parent::__construct(Queries::REGISTER_DEPARTMENT);

		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID_LEVEL_1, $idLevel1));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID_LEVEL_2, $idLevel2));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_STATUS_ID, $status));
	}
}

class RegisterPaymentMethodsCommand extends SqlCommand
{
	public function __construct($name, $installments, $discount, $status)
	{
		parent::__construct(Queries::REGISTER_PAYMENT_METHODS);

		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_INSTALLMENTS, $installments));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_DISCOUNT, $discount));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_STATUS_ID, $status));
	}
}

class RegisterProductCommand extends SqlCommand
{
	public function __construct($code, $barCode, $name, $description, $price, $stock, $weight, $height, $width, $lenght, $status, $brandId, $colorId)
	{
		parent::__construct(Queries::REGISTER_PRODUCT);

		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_CODE, $code));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_BAR_CODE, $barCode));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_DESCRIPTION, $description));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_PRICE, $price));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_STOCK, $stock));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_WEIGHT, $weight));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_HEIGHT, $height));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_WIDTH, $width));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_LENGHT, $lenght));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_STATUS_ID, $status));
		$this->AddParameter(new Parameter(ParameterNames::BRAND_ID, $brandId));
		$this->AddParameter(new Parameter(ParameterNames::COLOR_ID, $colorId));
	}
}

class RegisterColorCommand extends SqlCommand
{
	public function __construct($description, $colorCode)
	{
		parent::__construct(Queries::REGISTER_COLOR);

		$this->AddParameter(new Parameter(ParameterNames::COLOR_DESCRIPTION, $description));
		$this->AddParameter(new Parameter(ParameterNames::COLOR_CODE, $colorCode));
	}
}

class RegisterBrandCommand extends SqlCommand
{
	public function __construct($name)
	{
		parent::__construct(Queries::REGISTER_BRAND);

		$this->AddParameter(new Parameter(ParameterNames::BRAND_NAME, $name));
	}
}

class RegisterContactCommand extends SqlCommand
{
	public function __construct($name, $email, $phone, $message)
	{
		parent::__construct(Queries::REGISTER_CONTACT);
		$this->AddParameter(new Parameter(ParameterNames::NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::MESSAGE, $message));
		$this->AddParameter(new Parameter(ParameterNames::CONTACT_TIME, Date::Now()->ToDatabase()));
	}
}

class RegisterAddressCommand extends SqlCommand
{
	public function __construct($zipCode, $street, $number, $complement, $district, $city, $state, $client_id)
	{
		parent::__construct(Queries::REGISTER_ADDRESS);
                
		$this->AddParameter(new Parameter(ParameterNames::ZIPCODE, $zipCode));
		$this->AddParameter(new Parameter(ParameterNames::STREET, $street));
		$this->AddParameter(new Parameter(ParameterNames::NUMBER, $number));
		$this->AddParameter(new Parameter(ParameterNames::COMPLEMENT, $complement));
		$this->AddParameter(new Parameter(ParameterNames::DISTRICT, $district));
		$this->AddParameter(new Parameter(ParameterNames::CITY, $city));
		$this->AddParameter(new Parameter(ParameterNames::STATE, $state));
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_ID, $client_id));
	}
}

class RemoveLegacyPasswordCommand extends SqlCommand
{
	public function __construct($userId)
	{
		parent::__construct(Queries::REMOVE_LEGACY_PASSWORD);

		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class ReportingCommand extends SqlCommand
{
	public function __construct($fname, $lname, $username, $organization, $group)
	{
		parent::__construct(Queries::GET_REPORT);

		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
		$this->AddParameter(new Parameter(ParameterNames::ORGANIZATION, $organization));
		$this->AddParameter(new Parameter(ParameterNames::GROUP, $group));
	}
}

class UpdateGroupCommand extends SqlCommand
{
	public function __construct($groupId, $groupName, $adminGroupId)
	{
		parent::__construct(Queries::UPDATE_GROUP);
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ID, $groupId));
		$this->AddParameter(new Parameter(ParameterNames::GROUP_NAME, $groupName));
		$this->AddParameter(new Parameter(ParameterNames::GROUP_ADMIN_ID, $adminGroupId));
	}
}

class UpdateLoginDataCommand extends SqlCommand
{
	public function __construct($userId, $lastLoginTime, $language)
	{
		parent::__construct(Queries::UPDATE_LOGINDATA);
		$this->AddParameter(new Parameter(ParameterNames::LAST_LOGIN, $lastLoginTime));
		$this->AddParameter(new Parameter(ParameterNames::LANGUAGE, $language));
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
	}
}

class UpdateUserCommand extends SqlCommand
{
	public function __construct($userId, $statusId, $encryptedPassword, $passwordSalt, $firstName, $lastName, $emailAddress,
            $username, $dateBirth, $sex, $phone, $lastLogin)
	{
		parent::__construct(Queries::UPDATE_USER);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $statusId));
		$this->AddParameter(new Parameter(ParameterNames::PASSWORD, $encryptedPassword));
		$this->AddParameter(new Parameter(ParameterNames::SALT, $passwordSalt));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $firstName));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lastName));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $emailAddress));
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::DATE_BIRTH, $dateBirth));
		$this->AddParameter(new Parameter(ParameterNames::SEX, $sex));
		$this->AddParameter(new Parameter(ParameterNames::DATE_MODIFIED, Date::Now()->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::LAST_LOGIN, $lastLogin));
	}
}

class UpdateClientCommand extends SqlCommand
{
	public function __construct($clientId, $clientCode, $clientDocument, $firstName, $lastName, $emailAddress,
            $phone, $dateBirth, $sex, $statusId)
	{
		parent::__construct(Queries::UPDATE_CLIENT);
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_ID, $clientId));
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_CODE, $clientCode));
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_DOCUMENT, $clientDocument));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $firstName));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lastName));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $emailAddress));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::DATE_BIRTH, $dateBirth));
		$this->AddParameter(new Parameter(ParameterNames::SEX, $sex));
		$this->AddParameter(new Parameter(ParameterNames::USER_STATUS_ID, $statusId));
		$this->AddParameter(new Parameter(ParameterNames::DATE_MODIFIED, Date::Now()->ToDatabase()));
	}
}

class UpdateProviderCommand extends SqlCommand
{
	public function __construct($providerId, $companyName, $tradingName, $cnpj, $stateRegistration, $street, $district, $zipCode, $city, $state, $phone, $email)
	{
		parent::__construct(Queries::UPDATE_PROVIDER);
		$this->AddParameter(new Parameter(ParameterNames::PROVIDER_ID, $providerId));
		$this->AddParameter(new Parameter(ParameterNames::COMPANY_NAME, $companyName));
		$this->AddParameter(new Parameter(ParameterNames::TRADING_NAME, $tradingName));
		$this->AddParameter(new Parameter(ParameterNames::CNPJ, $cnpj));
		$this->AddParameter(new Parameter(ParameterNames::STATE_REGISTRATION, $stateRegistration));
		$this->AddParameter(new Parameter(ParameterNames::STREET, $street));
		$this->AddParameter(new Parameter(ParameterNames::DISTRICT, $district));
		$this->AddParameter(new Parameter(ParameterNames::ZIPCODE, $zipCode));
		$this->AddParameter(new Parameter(ParameterNames::CITY, $city));
		$this->AddParameter(new Parameter(ParameterNames::STATE, $state));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
	}
}

class UpdateDepartmentCommand extends SqlCommand
{
	public function __construct($departmentId, $idLevel1, $idLevel2, $name, $statusId)
	{
		parent::__construct(Queries::UPDATE_DEPARTMENT);
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID_LEVEL_1, $idLevel1));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID_LEVEL_2, $idLevel2));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_STATUS_ID, $statusId));
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID, $departmentId));
	}
}

class AddProductDepartmentCommand extends SqlCommand
{
	public function __construct($departmentId, $productId)
	{
		parent::__construct(Queries::ADD_PRODUCT_DEPARTMENT);
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID, $departmentId));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class DeleteProductDepartmentCommand extends SqlCommand
{
	public function __construct($departmentId, $productId)
	{
		parent::__construct(Queries::DELETE_PRODUCT_DEPARTMENT);
		$this->AddParameter(new Parameter(ParameterNames::DEPARTMENT_ID, $departmentId));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class AddProductProviderCommand extends SqlCommand
{
	public function __construct($providerId, $productId)
	{
		parent::__construct(Queries::ADD_PRODUCT_PROVIDER);
		$this->AddParameter(new Parameter(ParameterNames::PROVIDER_ID, $providerId));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class DeleteProductProviderCommand extends SqlCommand
{
	public function __construct($providerId, $productId)
	{
		parent::__construct(Queries::DELETE_PRODUCT_PROVIDER);
		$this->AddParameter(new Parameter(ParameterNames::PROVIDER_ID, $providerId));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
	}
}

class UpdatePaymentMethodsCommand extends SqlCommand
{
	public function __construct($paymentMethodId, $name, $installments, $discount, $statusId)
	{
		parent::__construct(Queries::UPDATE_PAYMENT_METHODS);
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_ID, $paymentMethodId));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_INSTALLMENTS, $installments));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_DISCOUNT, $discount));
		$this->AddParameter(new Parameter(ParameterNames::PAYMENT_METHODS_STATUS_ID, $statusId));
	}
}

class UpdateProductCommand extends SqlCommand
{
	public function __construct($productId, $code, $barCode, $name, $description, $price, $stock, $weight, $height, $width, $lenght, $statusId, $brandId, $colorId)
	{
		parent::__construct(Queries::UPDATE_PRODUCT);
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_ID, $productId));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_CODE, $code));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_BAR_CODE, $barCode));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_NAME, $name));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_DESCRIPTION, $description));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_PRICE, $price));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_STOCK, $stock));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_WEIGHT, $weight));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_HEIGHT, $height));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_WIDTH, $width));
                $this->AddParameter(new Parameter(ParameterNames::PRODUCT_LENGHT, $lenght));
		$this->AddParameter(new Parameter(ParameterNames::PRODUCT_STATUS_ID, $statusId));
		$this->AddParameter(new Parameter(ParameterNames::BRAND_ID, $brandId));
		$this->AddParameter(new Parameter(ParameterNames::COLOR_ID, $colorId));
	}
}

class UpdateColorCommand extends SqlCommand
{
	public function __construct($colorId, $description, $colorCode)
	{
		parent::__construct(Queries::UPDATE_COLOR);
		$this->AddParameter(new Parameter(ParameterNames::COLOR_ID, $colorId));
		$this->AddParameter(new Parameter(ParameterNames::COLOR_DESCRIPTION, $description));
                $this->AddParameter(new Parameter(ParameterNames::COLOR_CODE, $colorCode));
	}
}

class UpdateBrandCommand extends SqlCommand
{
	public function __construct($brandId, $name)
	{
		parent::__construct(Queries::UPDATE_BRAND);
		$this->AddParameter(new Parameter(ParameterNames::BRAND_ID, $brandId));
		$this->AddParameter(new Parameter(ParameterNames::BRAND_NAME, $name));
	}
}

class UpdateAddressCommand extends SqlCommand
{
	public function __construct($street, $number, $district, $zipCode, $city, $state, $clientId)
	{
		parent::__construct(Queries::UPDATE_ADDRESS);
		$this->AddParameter(new Parameter(ParameterNames::STREET, $street));
		$this->AddParameter(new Parameter(ParameterNames::NUMBER, $number));
		$this->AddParameter(new Parameter(ParameterNames::DISTRICT, $district));
		$this->AddParameter(new Parameter(ParameterNames::ZIPCODE, $zipCode));
		$this->AddParameter(new Parameter(ParameterNames::CITY, $city));
		$this->AddParameter(new Parameter(ParameterNames::STATE, $state));
		$this->AddParameter(new Parameter(ParameterNames::CLIENT_ID, $clientId));
	}
}

class UpdateAddressAttributesCommand extends SqlCommand
{
	public function __construct($userId, $complement)
	{
		parent::__construct(Queries::UPDATE_ADDRESS_ATTRIBUTES);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::COMPLEMENT, $complement));
	}
}


class UpdateUserFromLdapCommand extends SqlCommand
{
	public function __construct($username, $email, $fname, $lname, $password, $salt, $phone, $organization, $position)
	{
		parent::__construct(Queries::UPDATE_USER_BY_USERNAME);
		$this->AddParameter(new Parameter(ParameterNames::USERNAME, $username));
		$this->AddParameter(new Parameter(ParameterNames::EMAIL_ADDRESS, $email));
		$this->AddParameter(new Parameter(ParameterNames::FIRST_NAME, $fname));
		$this->AddParameter(new Parameter(ParameterNames::LAST_NAME, $lname));
		$this->AddParameter(new Parameter(ParameterNames::PASSWORD, $password));
		$this->AddParameter(new Parameter(ParameterNames::SALT, $salt));
		$this->AddParameter(new Parameter(ParameterNames::PHONE, $phone));
		$this->AddParameter(new Parameter(ParameterNames::ORGANIZATION, $organization));
		$this->AddParameter(new Parameter(ParameterNames::POSITION, $position));
	}
}

class UpdateUserSessionCommand extends SqlCommand
{
	public function __construct($userId, $token, Date $insertTime, $serializedSession)
	{
		parent::__construct(Queries::UPDATE_USER_SESSION);
		$this->AddParameter(new Parameter(ParameterNames::USER_ID, $userId));
		$this->AddParameter(new Parameter(ParameterNames::SESSION_TOKEN, $token));
		$this->AddParameter(new Parameter(ParameterNames::DATE_MODIFIED, $insertTime->ToDatabase()));
		$this->AddParameter(new Parameter(ParameterNames::USER_SESSION, $serializedSession));
	}
}
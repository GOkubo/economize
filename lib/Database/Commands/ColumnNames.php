<?php
class ColumnNames
{
	private function __construct()
	{
	}

	// USERS //
	const USER_ID = 'user_id';
	const USERNAME = 'username';
	const EMAIL = 'email';
	const FIRST_NAME = 'fname';
	const LAST_NAME = 'lname';
	const DATE_BIRTH = 'date_birth';
	const SEX = 'sex';
	const PASSWORD = 'password';
	const OLD_PASSWORD = 'legacypassword';
	const USER_CREATED = 'date_created';
	const USER_MODIFIED = 'last_modified';
	const USER_STATUS_ID = 'status_id';
	const HOMEPAGE_ID = 'homepageid';
	const LAST_LOGIN = 'lastlogin';
	const TIMEZONE_NAME = 'timezone';
	const LANGUAGE_CODE = 'language';
	const SALT = 'salt';
	const PHONE_NUMBER = 'phone';
	const ORGANIZATION = 'organization';
	const PROFESSIONALREGISTER = 'professional_register';
	const PROFESSIONALREGISTERTYPE = 'professional_register_type';
	const PROFESSIONALIMG = 'professional_img';
	const EDUCATION_ID = 'education_id';
	const EDUCATION_TYPE = 'education_type';
	const EDUCATION_TYPE_ID = 'education_type_id';
	const EDUCATION_TYPE_NAME = 'education_type_name';
	const CURSEOFSTUDY = 'curse_of_study';
	const ACADEMICINSTITUTION = 'academic_institution';
	const CONCLUSIONYEAR = 'conclusion_year';
	const DEFAULT_SCHEDULE_ID = 'default_schedule_id';
	const USER_PREFERENCES = 'preferences';
	const CLIENT_ID = 'client_id';
	const CLIENT_CODE = 'client_code';
	const CLIENT_DOCUMENT = 'document';
	const CLIENT_NAME = 'client_name';
        
        // PROVIDERS //
	const PROVIDER_ID = 'provider_id';
	const COMPANY_NAME = 'company_name';
	const TRADING_NAME = 'trading_name';
	const CNPJ = 'cnpj';
	const STATE_REGISTRATION = 'state_registration';
        
        // ADDRESS //
	const ADDRESS_ID = 'address_id';
	const STREET = 'street';
	const NUMBER = 'number';
	const COMPLEMENT = 'complement';
	const DISTRICT = 'district';
	const ZIP_CODE = 'zipCode';
	const ZIP_CODE_ = 'zip_code';
	const CITY = 'city';
	const STATE = 'state';
        
        // STORE //
	const STORE_ID = 'store_id';
	const STORE_COMPANY_NAME = 'store_company_name';
	const STORE_FANCY_NAME = 'store_fancy_name';
	const OPENING_DATE = 'opening_date';
	const REGISTRATION_NUMBER = 'registration_number';
	const STORE_MAIN_ECONOMIC_ACTIVITY_CODE = 'store_main_economic_activity_code';
	const STORE_MAIN_ECONOMIC_ACTIVITY_DESCRIPTION = 'store_main_economic_activity_description';
	const STORE_LEGAL_STATUS_CODE = 'store_legal_status_code';
	const STORE_LEGAL_STATUS_DESCRIPTION = 'store_legal_status_description';
	const STORE_ADDRESS = 'store_address';
	const STORE_ADDRESS_NUMBER = 'store_address_number';
	const STORE_ADDRESS_COMPLEMENT = 'store_address_complement';
	const STORE_ADDRESS_ZIP_CODE = 'store_address_zip_code';
	const STORE_ADDRESS_DISTRICT = 'store_address_district';
	const STORE_ADDRESS_CITY = 'store_address_city';
	const STORE_ADDRESS_STATE = 'store_address_state';
	const STORE_EMAIL = 'store_email';
	const STORE_PHONE_1 = 'store_phone_1';
	const STORE_PHONE_2 = 'store_phone_2';
	const STORE_SITUATION = 'store_situation';
        
        // PRODUCT //
	const PRODUCT_ID = 'product_id';
	const PRODUCT_CODE = 'product_code';
	const PRODUCT_BAR_CODE = 'bar_code';
	const PRODUCT_NAME = 'product_name';
	const PRODUCT_DESCRIPTION = 'product_description';
	const PRODUCT_PRICE = 'price';
	const PRODUCT_STOCK = 'stock';
	const PRODUCT_WEIGHT = 'weight';
	const PRODUCT_HEIGHT = 'height';
	const PRODUCT_WIDTH = 'width';
	const PRODUCT_LENGHT = 'lenght';
	const PRODUCT_STATUS = 'status_id';
        
        // BRAND //
	const BRAND_ID = 'brand_id';
	const BRAND_NAME = 'brand_name';
        
        // COLOR //
	const COLOR_ID = 'color_id';
	const COLOR_DESCRIPTION = 'description';
	const COLOR_CODE = 'color_code';
        
        // DEPARTMENT //
	const DEPARTMENT_ID = 'department_id';
	const DEPARTMENT_ID_LEVEL_1 = 'id_level_1';
	const DEPARTMENT_ID_LEVEL_2 = 'id_level_2';
	const DEPARTMENT_NAME = 'name';
	const DEPARTMENT_STATUS = 'status_id';
        
	// PAYMENT_METHODS //
	const PAYMENT_METHODS_ID = 'payment_methods_id';
	const PAYMENT_METHODS_NAME = 'payment_methods_name';
	const PAYMENT_METHODS_INSTALLMENTS = 'payment_methods_installments';
	const PAYMENT_METHODS_DISCOUNT = 'payment_methods_discount';
	const PAYMENT_METHODS_STATUS = 'payment_methods_status_id';

	// ORDER //
	const ORDER_ID = 'order_id';
	const STATUS_ORDER_ID = 'status_order_id';
	const STATUS_ORDER_NAME = 'status_order_name';
	const ORDER_DATE = 'order_date';
	const ORDER_TOTAL = 'order_total';
	const ORDER_DISCOUNT = 'order_discount';
        
	// ORDER_ITEMS //
	const ORDER_ITEMS_QUANTITY = 'quantity';
	const ORDER_ITEMS_PRICE = 'price';
	const ORDER_ITEMS_DISCOUNT_VALUE = 'discount_value';
	const ORDER_ITEMS_DISCOUNT_PERCENT = 'discount_percent';
        
	// USER_PREFERENCES //
	const PREFERENCE_NAME = 'name';
	const PREFERENCE_VALUE = 'value';

	// ROLES //
	const ROLE_LEVEL = 'role_level';
	const ROLE_ID = 'role_id';
	const ROLE_NAME = 'name';

	// GROUPS //
	const GROUP_ID = 'group_id';
	const GROUP_NAME = 'name';
	const GROUP_ADMIN_GROUP_ID = 'admin_group_id';
	const GROUP_ADMIN_GROUP_NAME = 'admin_group_name';

	// CONTACT //
	const CONTACT_ID = 'contact_id';
	const NAME = 'name';
	const MESSAGE = 'message';
	const CONTACT_TIME = 'contact_time';

	// SAVED REPORTS //
	const REPORT_ID = 'saved_report_id';
	const REPORT_NAME = 'report_name';
	const DATE_CREATED = 'date_created';
	const REPORT_DETAILS = 'report_details';

	// USER SESSION //
	const SESSION_TOKEN = 'session_token';
	const USER_SESSION = 'user_session_value';
	const SESSION_LAST_MODIFIED = 'last_modified';

	// dynamic
	const TOTAL = 'total';
	const TOTAL_TIME = 'totalTime';
	const OWNER_FIRST_NAME = 'owner_fname';
	const OWNER_LAST_NAME = 'owner_lname';
	const OWNER_FULL_NAME_ALIAS = 'owner_name';
	const OWNER_USER_ID = 'owner_id';
	const OWNER_PHONE = 'owner_phone';
	const OWNER_ORGANIZATION = 'owner_organization';
	const OWNER_POSITION = 'owner_position';
	const GROUP_NAME_ALIAS = 'group_name';
	const RESOURCE_NAME_ALIAS = 'resource_name';
	const SCHEDULE_NAME_ALIAS = 'schedule_name';
	const PARTICIPANT_LIST = 'participant_list';
	const INVITEE_LIST = 'invitee_list';
	const ATTRIBUTE_LIST = 'attribute_list';
}
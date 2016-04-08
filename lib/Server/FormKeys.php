<?php
/**
Copyright 2011-2014 Nick Korbel

This file is part of Booked SchedulerBooked SchedulereIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later versBooked SchedulerduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
alBooked SchedulercheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

class FormKeys
{
	private function __construct()
	{
	}

	const ADDRESS = 'address';
	const ADMIN_ID = 'adminId';
	const AUTO_ASSIGN = 'autoAssign';

	const BRAND_ID = 'brandId';
	const BRAND_NAME = 'brandName';
	const BUFFER_TIME = 'BUFFER_TIME';
	const BUFFER_TIME_NONE = 'BUFFER_TIME_NONE';

	const CAPTCHA = 'captcha';
	const CITY = 'city';
	const CHANGE_PAY_BOX = 'changePayBox';
	const CLIENT_ID = 'clientId';
	const CLIENT_CODE = 'clientCode';
	const CLIENT_DOCUMENT = 'clientDocument';
	const CLIENT_PAYMENT = 'clientPayment';
	const CNPJ = 'cnpj';
	const CODE_PAY_BOX = 'codePayBox';
	const COLOR_ID = 'color_id';
	const COLOR_CODE = 'color_code';
	const COMPANY_NAME = 'companyName';
	const COMPLEMENT = 'complement';
	const CONFLICT_ACTION = 'conflictAction';
	const CONTACT_INFO = 'contactInfo';
	const CSS_FILE = 'CSS_FILE';
	const CURRENT_PASSWORD = 'currentPassword';
	const CURSEOFSTUDY = 'curseOfStudy';

	const DATE_BIRTH = 'dateBirth';
	const DEFAULT_HOMEPAGE = 'defaultHomepage';
	const DEPARTMENT_ID = 'departmentId';
	const DEPARTMENT_NAME = 'departmentName';
	const DESCRIPTION = 'description';
	const DISTRICT = 'district';
	const DURATION = 'duration';

	const EMAIL = 'email';

	const FIRST_NAME = 'fname';

	const GROUP = 'group';
	const GROUP_ID = 'group_id';
	const GROUP_NAME = 'group_name';
	const GROUP_ADMIN = 'group_admin';

	const ID_LEVEL_1 = 'idLevel1';
	const ID_LEVEL_2 = 'idLevel2';
	const INSTALL_PASSWORD = 'install_password';
	const INSTALL_DB_USER = 'install_db_user';
	const INSTALL_DB_PASSWORD = 'install_db_password';
	const IS_ACTIVE = 'isactive';

	const LANGUAGE = 'language';
	const LAST_NAME = 'lname';
	const LIMIT = 'limit';
	const LOCATION = 'location';
	const LOGIN = 'login';
	const LOGO_FILE = 'LOGO_FILE';

	const MESSAGE = 'message';

	const NAME = 'name';
	const NOTES = 'notes';
	const NUMBER = 'number';

	const PARENT_ID = 'PARENT_ID';
	const PASSWORD = 'password';
	const PASSWORD_CONFIRM = 'passwordConfirm';
	const PAY_BOX_TOTAL = 'payBoxTotal';
	const PAYMENT_METHOD_ID = 'paymentMethodId';
	const PAYMENT_METHOD_NAME = 'paymentMethodName';
	const PAYMENT_METHOD_INSTALLMENTS = 'paymentMethodInstallment';
	const PAYMENT_METHOD_DISCOUNT = 'paymentMethodDiscount';
	const PAYMENT_ID_PAY_BOX = 'paymentIdPayBox';
	const PAYMENT_VALUE_PAY_BOX = 'paymentValuePayBox';
	const PAYMENT_INSTALLMENT_PAY_BOX = 'paymentInstallmentPayBox';
	const PERSIST_LOGIN = 'persistLogin';
	const PHONE = 'phone';
	const POSITION = 'position';
	const PRODUCT_ID = 'productId';
	const PRODUCT_CODE = 'productCode';
	const PRODUCT_BAR_CODE = 'productBarCode';
	const PRODUCT_NAME = 'productName';
	const PRODUCT_DESCRIPTION = 'productDescription';
	const PRODUCT_QUANTITY = 'productQuantity';
	const PRODUCT_PRICE = 'productPrice';
	const PRODUCT_STOCK = 'productStock';
	const PRODUCT_WEIGHT = 'productWeight';
	const PRODUCT_HEIGHT = 'productHeight';
	const PRODUCT_WIDTH = 'productWidth';
	const PRODUCT_LENGHT = 'productLenght';
	const PRODUCTS_PAY_BOX_ARRAY = 'productsPayBoxArray';
        
	const QUANTITY_PAY_BOX_ARRAY = 'quantityPayBoxArray';

	const REMOVED_FILE_IDS = 'removeFile';
	const REPORT_START = 'reportStart';
	const REPORT_END = 'reportEnd';
	const REPORT_GROUPBY = 'REPORT_GROUPBY';
	const REPORT_RANGE = 'REPORT_RANGE';
	const REPORT_RESULTS = 'reportResults';
	const REPORT_USAGE = 'REPORT_USAGE';
	const REPORT_NAME = 'REPORT_NAME';
	const RESUME = 'resume';
	const RETURN_URL = 'returnUrl';
	const ROLE_ID = 'roleId';
        
	const SEX = 'sex';
	const STATE = 'state';
	const STATE_REGISTRATION = 'stateRegistration';
	const STATUS_ID = 'STATUS_ID';
	const STREET = 'street';
	const SUBMIT = 'SUBMIT';
	const SUMMARY = 'summary';
	const SUBTOTAL_PAY_BOX_ARRAY = 'subtotalPayBoxArray';
        
	// STORE PARAMETERS
        const STORE_COMPANY_NAME = 'storeCompanyName';
        const STORE_FANCY_NAME = 'storeFancyName';
        const OPENING_DATE = 'openingDate';
        const REGISTRATION_NUMBER = 'registrationNumber';
        const STORE_MAIN_ECONOMIC_ACTIVITY_CODE = 'storeMainEconomicActivityCode';
        const STORE_MAIN_ECONOMIC_ACTIVITY_DESCRIPTION = 'storeMainEconomicActivityDescription';
        const STORE_LEGAL_STATUS_CODE = 'storeLegalStatusCode';
        const STORE_LEGAL_STATUS_DESCRIPTION = 'storeLegalStatusDescription';
        const STORE_ADDRESS = 'storeAddress';
        const STORE_ADDRESS_NUMBER = 'storeAddressNumber';
        const STORE_ADDRESS_COMPLEMENT = 'storeAddressComplement';
        const STORE_ADDRESS_ZIP_CODE = 'storeAddressZipCode';
        const STORE_ADDRESS_DISTRICT = 'storeAddressDistrict';
        const STORE_ADDRESS_CITY = 'storeAddressCity';
        const STORE_ADDRESS_STATE = 'storeAddressState';
        const STORE_EMAIL = 'storeEmail';
        const STORE_PHONE_1 = 'storePhone1';
        const STORE_PHONE_2 = 'storePhone2';
        const STORE_SITUATION = 'storeSituation';

	const TIMEZONE = 'timezone';
	const TRADING_NAME = 'tradingName';

	const UNIT = 'unit';
	const UNIT_COST = 'unitCost';
	const USER_ID = 'userId';
	const USERNAME = 'username';
	const USING_SINGLE_LAYOUT = 'USING_SINGLE_LAYOUT';
	
        const ZIPCODE = 'zipCode';

	public static function Evaluate($formKey)
	{
		$key = strtoupper($formKey);
		return eval("return FormKeys::$key;");
	}
}

?>
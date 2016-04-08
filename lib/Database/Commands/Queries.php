<?php
class Queries
{
	private function __construct()
	{
	}

	const ADD_GROUP = 'INSERT INTO groups (name) VALUES (@groupname)';

	const ADD_GROUP_ROLE = 'INSERT INTO group_roles (group_id, role_id) VALUES (@groupid, @roleid)';

	const ADD_SAVED_REPORT = 'INSERT INTO saved_reports (report_name, user_id, date_created, report_details)
                                  VALUES (@report_name, @userid, @dateCreated, @report_details)';

	const ADD_USER_GROUP = 'INSERT INTO user_groups (user_id, group_id) VALUES (@userid, @groupid)';

	const ADD_USER_SESSION = 'INSERT INTO user_session (user_id, last_modified, session_token, user_session_value)
                                  VALUES (@userid, @dateModified, @session_token, @user_session_value)';

	const CHECK_EMAIL = 'SELECT user_id FROM users WHERE email = @email';

	const CHECK_USERNAME = 'SELECT user_id FROM users WHERE username = @username';

	const CHECK_USER_EXISTENCE = 'SELECT * FROM users WHERE ( (username IS NOT NULL AND username = @username) OR (email IS NOT NULL AND email = @email) )';

	const COOKIE_LOGIN = 'SELECT user_id, lastlogin, email FROM users WHERE user_id = @userid';

	const DELETE_GROUP = 'DELETE FROM groups WHERE group_id = @groupid';

	const DELETE_GROUP_ROLE = 'DELETE FROM group_roles WHERE group_id = @groupid AND role_id = @roleid';

	const DELETE_SAVED_REPORT = 'DELETE FROM saved_reports WHERE saved_report_id = @report_id AND user_id = @userid';

	const DELETE_USER = 'DELETE FROM users WHERE user_id = @userid';
        
	const DELETE_PRODUCT = 'DELETE FROM product WHERE product_id = @productId';
        
	const DELETE_COLOR = 'DELETE FROM colors WHERE color_id = @colorId';
        
	const DELETE_DEPARTMENT = 'DELETE FROM department WHERE department_id = @departmentId';
        
	const DELETE_PAYMENT_METHOD = 'DELETE FROM payment_methods WHERE payment_methods_id = @paymentMethodsId';
        
	const DELETE_BRAND = 'DELETE FROM brand WHERE brand_id = @brandId';
        
	const DELETE_PROVIDER = 'DELETE FROM provider WHERE provider_id = @providerId';

	const DELETE_USER_GROUP = 'DELETE FROM user_groups WHERE user_id = @userid AND group_id = @groupid';

	const DELETE_USER_SESSION = 'DELETE FROM user_session WHERE session_token = @session_token';

	const LOGIN_USER = 'SELECT * FROM users WHERE (username = @username OR email = @username)';

	const ADDRESS_BY_USER = 'SELECT a.* FROM address a INNER JOIN users u ON (u.username = @username OR u.email = @username) WHERE a.user_id = u.user_id';

	const GET_ALL_APPLICATION_ADMINS = 'SELECT *
            FROM users
            WHERE status_id = @user_statusid AND
            user_id IN (
                SELECT user_id
                FROM user_groups ug
                INNER JOIN groups g ON ug.group_id = g.group_id
                INNER JOIN group_roles gr ON g.group_id = gr.group_id
                INNER JOIN roles ON roles.role_id = gr.role_id AND roles.role_level = @role_level
              )';

	const GET_ALL_GROUPS =
		'SELECT g.*, admin_group.name as admin_group_name
		FROM groups g
		LEFT JOIN groups admin_group ON g.admin_group_id = admin_group.group_id
		ORDER BY g.name';

	const GET_ALL_GROUPS_BY_ROLE =
			'SELECT g.*
		FROM groups g
		INNER JOIN group_roles gr ON g.group_id = gr.group_id
		INNER JOIN roles r ON r.role_id = gr.role_id
		WHERE r.role_level = @role_level
		ORDER BY g.name';

	const GET_ALL_GROUP_ADMINS =
			'SELECT u.* FROM users u
        INNER JOIN user_groups ug ON u.user_id = ug.user_id
        WHERE status_id = @user_statusid AND ug.group_id IN (
          SELECT g.admin_group_id FROM user_groups ug
          INNER JOIN groups g ON ug.group_id = g.group_id
          WHERE ug.user_id = @userid AND g.admin_group_id IS NOT NULL)';

	const GET_ALL_GROUP_USERS = 'SELECT * FROM users u WHERE u.user_id IN (
                                     SELECT DISTINCT (ug.user_id) FROM user_groups ug
                                     INNER JOIN groups g ON g.group_id = ug.group_id
                                     WHERE g.group_id IN (@groupid))
                                     AND (0 = @user_statusid OR u.status_id = @user_statusid) ORDER BY u.lname, u.fname';

	const GET_ALL_SAVED_REPORTS = 'SELECT * FROM saved_reports WHERE user_id = @userid ORDER BY report_name, date_created';

	const GET_ALL_DEPARTMENTS_BY_STATUS = 'SELECT d.* FROM department d WHERE (0 = @departmentStatusId OR d.status_id = @departmentStatusId) ORDER BY d.name';

	const GET_ALL_PAYMENT_METHODS_BY_STATUS = 'SELECT pm.* FROM payment_methods pm WHERE (0 = @paymentMethodsStatusId OR pm.payment_methods_status_id = @paymentMethodsStatusId)';

	const GET_ALL_PRODUCTS_BY_STATUS = 'SELECT p.* FROM product p WHERE (0 = @productStatusId OR p.status_id = @productStatusId) ORDER BY p.product_name';
	
        const GET_ALL_ITEMS_BY_STATUS = 'SELECT i.*, p.product_code FROM seller_item i
                                        INNER JOIN product p ON p.product_id = i.product_id
                                        WHERE (0 = @itemStatusId OR i.status_id = @itemStatusId) ORDER BY i.seller_item_id';

	const GET_ALL_BRANDS = 'SELECT * FROM brand ORDER BY brand_name';

	const GET_ALL_COLORS = 'SELECT * FROM colors';

	const GET_ALL_STORE_PARAMETERS = 'SELECT * FROM store';

	const GET_ALL_USERS_BY_STATUS = 'SELECT * FROM users WHERE (0 = @user_statusid OR status_id = @user_statusid)';

	const GET_ALL_CLIENTS_BY_STATUS = 'SELECT clients.*, a.street, a.number, a.complement, a.district, a.zipCode, a.city, a.state
                                           FROM clients 
                                           INNER JOIN address a ON a.client_id = clients.client_id
                                           WHERE (0 = @clientStatusId OR status_id = @clientStatusId)';

	const GET_ALL_PROVIDERS = 'SELECT * FROM provider';

	const GET_GROUP_BY_ID = 'SELECT * FROM groups WHERE group_id = @groupid';

	const GET_GROUPS_I_CAN_MANAGE = 'SELECT g.group_id, g.name
                                         FROM groups g
                                         INNER JOIN groups a ON g.admin_group_id = a.group_id
                                         INNER JOIN user_groups ug on ug.group_id = a.group_id
                                         WHERE ug.user_id = @userid';

	const GET_GROUP_ROLES = 'SELECT r.* FROM roles r INNER JOIN group_roles gr ON r.role_id = gr.role_id WHERE gr.group_id = @groupid';

	const GET_SAVED_REPORT = 'SELECT * FROM saved_reports WHERE saved_report_id = @report_id AND user_id = @userid';

	const GET_ORDER_LIST_TEMPLATE = 'SELECT [SELECT_TOKEN] FROM orders o
                                        INNER JOIN order_products op ON op.order_id = o.order_id
                                        INNER JOIN order_payment opm ON opm.order_id = o.order_id
                                        INNER JOIN status_order so ON so.status_order_id = o.status_order_id
                                        INNER JOIN clients c ON c.client_id = o.client_id
                                        [JOIN_TOKEN]
                                        WHERE [WHERE_TOKEN]
                                        [GROUP_BY_TOKEN]
                                        [ORDER_TOKEN]';
        
	const GET_USER_BY_ID = 'SELECT * FROM users WHERE user_id = @userid';

	const GET_CLIENT_BY_ID = 'SELECT * FROM clients WHERE client_id = @clientId';

	const GET_CLIENT_BY_CLIENT_CODE = 'SELECT clients.*, a.street, a.number, a.complement, a.district, a.zipCode, a.city, a.state
                                           FROM clients 
                                           INNER JOIN address a ON a.client_id = clients.client_id
                                           WHERE client_code = @clientCode';

	const GET_PROVIDER_BY_ID = 'SELECT * FROM provider WHERE provider_id = @providerId';
        
	const GET_PRODUCT_BY_ID = 'SELECT * FROM product WHERE product_id = @productId';
        
	const GET_COLOR_BY_ID = 'SELECT * FROM colors WHERE color_id = @colorId';
        
	const GET_PRODUCT_BY_CODE = 'SELECT * FROM product WHERE product_code = @productCode';
        
	const GET_PRODUCT_BY_PAY_BOX_CODE = 'SELECT p.* FROM product p WHERE p.product_code = @productPayBoxCode OR p.bar_code = @productPayBoxCode';
        
	const GET_DEPARTMENT_BY_ID = 'SELECT * FROM department WHERE department_id = @departmentId';
        
	const GET_DEPARTMENT_BY_PRODUCT_ID = 'SELECT d.*
                                              FROM department d 
                                              INNER JOIN products_departments pd ON pd.department_id = d.department_id
                                              WHERE pd.product_id = @productId';
        
	const GET_PROVIDER_BY_PRODUCT_ID = 'SELECT p.*
                                            FROM provider p
                                            INNER JOIN products_provider pp ON pp.provider_id = p.provider_id
                                            WHERE pp.product_id = @productId';
        
	const GET_PAYMENT_METHODS_BY_ID = 'SELECT * FROM payment_methods WHERE payment_methods_id = @paymentMethodsId';
        
	const GET_BRAND_BY_ID = 'SELECT * FROM brand WHERE brand_id = @brandId';

	const GET_ADDRESS_BY_ID = 'SELECT * FROM address WHERE user_id = @userid';

	const GET_USER_BY_PUBLIC_ID = 'SELECT * FROM users WHERE public_id = @publicid';

	const GET_USER_GROUPS =
			'SELECT g.*, r.role_level
		FROM user_groups ug
		INNER JOIN groups g ON ug.group_id = g.group_id
		LEFT JOIN group_roles gr ON ug.group_id = gr.group_id
		LEFT JOIN roles r ON gr.role_id = r.role_id
		WHERE user_id = @userid AND (@role_null is null OR r.role_level IN (@role_level) )';

	const GET_USER_ROLES = 'SELECT user_id, user_level FROM roles r INNER JOIN user_roles ur on r.role_id = ur.role_id WHERE ur.user_id = @userid';

	const GET_USER_SESSION_BY_SESSION_TOKEN = 'SELECT * FROM user_session WHERE session_token = @session_token';

	const GET_USER_SESSION_BY_USERID = 'SELECT * FROM user_session WHERE user_id = @userid';

	const MIGRATE_PASSWORD = 'UPDATE users SET password = @password, legacypassword = null, salt = @salt WHERE user_id = @userid';

	const REGISTER_MINI_USER = 'INSERT INTO users (email, password, fname, lname, username, salt, timezone, status_id, role_id)
                                    VALUES (@email, @password, @fname, @lname, @username, @salt, @timezone, @user_statusid, @user_roleid)';

	const REGISTER_USER = 'INSERT INTO users (email, password, fname, lname, phone, date_birth, sex, username, salt, timezone, 
                                    language, homepageid, status_id, date_created, default_schedule_id)
                               VALUES (@email, @password, @fname, @lname, @phone, @dateBirth, @sex, @username, @salt, @timezone, 
                                    @language, @homepageid, @user_statusid, @dateCreated, @scheduleid)';

	const REGISTER_ORDER = 'INSERT INTO orders (status_order_id, client_id, order_date, order_total, order_discount)
                                VALUES (@statusOrderId, @clientId, @orderDate, @orderTotal, @orderDiscount)';

	const REGISTER_ORDER_ITEMS = 'INSERT INTO order_items (order_id, seller_items_id, quantity, price, discount_value, discount_percent)
                                      VALUES (@orderId, @sellerItemsId, @quantity, @price, @discountValue, @discountPercent)';

	const REGISTER_ORDER_PAYMENT = 'INSERT INTO order_payment (order_id, payment_methods_id, order_payment_value, order_payment_installment, order_payment_discount)
                                        VALUES (@orderId, @paymentMethodsId, @orderPaymentValue, @orderPaymentInstallment, @orderPaymentDiscount)';

	const REGISTER_CLIENT = 'INSERT INTO clients (client_code, document, fname, lname, email, phone, date_birth, sex, date_created, status_id)
                                 VALUES (@clientCode, @clientDocument, @fname, @lname, @email, @phone, @dateBirth, @sex, @dateCreated, @user_statusid)';

	const REGISTER_PROVIDER = 'INSERT INTO provider (company_name, trading_name, cnpj, state_registration, street, district, zip_code, city, state, phone, email)
                                   VALUES (@companyName, @tradingName, @cnpj, @stateRegistration, @street, @district, @zipCode, @city, @state, @phone, @email)';

	const REGISTER_DEPARTMENT = 'INSERT INTO department (id_level_1, id_level_2, name, status_id)
                                     VALUES (@departmentIdLevel1, @departmentIdLevel2, @departmentName, @departmentStatusId)';

	const REGISTER_PAYMENT_METHODS = 'INSERT INTO payment_methods (payment_methods_name, payment_methods_installments, payment_methods_discount, payment_methods_status_id)
                                          VALUES (@paymentMethodsName, @paymentMethodsInstallments, @paymentMethodsDiscount, @paymentMethodsStatusId)';

	const REGISTER_PRODUCT = 'INSERT INTO product (product_code, bar_code, product_name, product_description, price, stock, weight, height, width, lenght, status_id, brand_id, color_id)
                                  VALUES (@productCode, @productBarCode, @productName, @productDescription, @productPrice, @productStock, @productWeight, @productHeight, @productWidth, @productLenght, @productStatusId, @brandId, @colorId)';

	const REGISTER_COLOR = 'INSERT INTO colors (description, color_code) VALUES (@colorDescription, @colorCode)';

	const REGISTER_BRAND = 'INSERT INTO brand (brand_name) VALUES (@brandName)';

	const REGISTER_CONTACT = 'INSERT INTO contact (name, email, phone, message, contact_time) VALUES (@name, @email, @phone, @message, @contactTime)';
        
        const REGISTER_ADDRESS = 'INSERT INTO address (street, number, complement, district, zipCode, city, state, client_id)
                                  VALUES (@street, @number, @complement, @district, @zipCode, @city, @state, @clientId)';
        
        const REMOVE_LEGACY_PASSWORD = 'UPDATE users SET legacypassword = null WHERE user_id = @user_id';

	const UPDATE_GROUP = 'UPDATE groups SET name = @groupname, admin_group_id = @admin_group_id WHERE group_id = @groupid';

	const UPDATE_LOGINDATA = 'UPDATE users SET lastlogin = @lastlogin, language = @language WHERE user_id = @userid';

	const UPDATE_USER =
			'UPDATE users
		SET
			status_id = @user_statusid,
			password = @password,
			salt = @salt,
			fname = @fname,
			lname = @lname,
			email = @email,
			date_birth = @dateBirth,
			sex = @sex,
                        phone = @phone,
			last_modified = @dateModified,
			lastlogin = @lastlogin
		WHERE
			user_id = @userid';

	const UPDATE_CLIENT =
			'UPDATE clients
		SET
                        client_code = @clientCode,
                        document = @clientDocument,
			fname = @fname,
			lname = @lname,
			email = @email,
                        phone = @phone,
			date_birth = @dateBirth,
			sex = @sex,
			last_modified = @dateModified,
			status_id = @user_statusid
		WHERE
			client_id = @clientId';
        
	const UPDATE_PROVIDER =
			'UPDATE provider
		SET
                        company_name = @companyName,
                        trading_name = @tradingName,
			cnpj = @cnpj,
			state_registration = @stateRegistration,
			street = @street,
                        district = @district,
			zip_code = @zipCode,
			city = @city,
			state = @state,
			phone = @phone,
			email = @email
		WHERE
			provider_id = @providerId';

	const UPDATE_DEPARTMENT =
			'UPDATE department
		SET
			id_level_1 = @departmentIdLevel1,
			id_level_2 = @departmentIdLevel2,
			name = @departmentName,
			status_id = @departmentStatusId
		WHERE
			department_id = @departmentId';

	const UPDATE_PAYMENT_METHODS =
			'UPDATE payment_methods
		SET
			payment_methods_name = @paymentMethodsName,
			payment_methods_installments = @paymentMethodsInstallments,
			payment_methods_discount = @paymentMethodsDiscount,
			payment_methods_status_id = @paymentMethodsStatusId
		WHERE
			payment_methods_id = @paymentMethodsId';
        
	const UPDATE_PRODUCT =
			'UPDATE product
		SET
			product_code = @productCode,
                        bar_code = @productBarCode,
			product_name = @productName,
			product_description = @productDescription,
			price = @productPrice,
			stock = @productStock,
			weight = @productWeight,
			height = @productHeight,
			width = @productWidth,
			lenght = @productLenght,
			status_id = @productStatusId,
			brand_id = @brandId,
			color_id = @colorId
		WHERE
			product_id = @productId';
        
	const UPDATE_COLOR = 'UPDATE colors SET description = @colorDescription, color_code = @colorCode WHERE color_id = @colorId';
        
	const ADD_PRODUCT_DEPARTMENT = 'INSERT INTO products_departments VALUES (@productId, @departmentId)';
        
	const DELETE_PRODUCT_DEPARTMENT = 'DELETE FROM products_departments WHERE product_id = @productId AND department_id = @departmentId';
        
	const ADD_PRODUCT_PROVIDER = 'INSERT INTO products_provider VALUES (@productId, @providerId)';
        
	const DELETE_PRODUCT_PROVIDER = 'DELETE FROM products_provider WHERE product_id = @productId AND provider_id = @providerId';

	const UPDATE_BRAND = 'UPDATE brand SET brand_name = @brandName WHERE brand_id = @brandId';
	
        const UPDATE_ADDRESS =
			'UPDATE address
		SET
			street = @street,
			number = @number,
			district = @district,
			zipCode = @zipCode,
			city = @city,
			state = @state
		WHERE
			client_id = @clientId';

	const UPDATE_USER_BY_USERNAME =
			'UPDATE users
		SET
			email = COALESCE(@email, email),
			password = @password,
			salt = @salt,
			fname = COALESCE(@fname, fname),
			lname = COALESCE(@lname, lname),
			phone = COALESCE(@phone, phone),
			organization = COALESCE(@organization, organization),
			position = COALESCE(@position, position)
		WHERE
			username = @username';

	const UPDATE_USER_SESSION =
			'UPDATE user_session
		SET
			last_modified = @dateModified,
			session_token = @session_token,
			user_session_value = @user_session_value
		WHERE user_id = @userid';

	const VALIDATE_USER =
			'SELECT user_id, password, salt, legacypassword
		FROM users
		WHERE (username = @username OR email = @username) AND status_id = 1';
}

class QueryOrderBuilder
{
	public static $GROUP_BY_FRAGMENT = ' GROUP BY o.order_id';
	
        public static $DATE_FRAGMENT = ' (o.order_date >= @startDate AND o.order_date <= @endDate)';

	public static $SELECT_LIST_FRAGMENT = ' o.order_id, so.status_order_name, CONCAT(c.fname, \' \', c.lname) as client_name, o.order_date, o.order_total';

	private static function Build($selectValue, $joinToken, $whereToken, $groupToken, $orderToken)
	{
		return  str_replace('[SELECT_TOKEN]', $selectValue,
                        str_replace('[JOIN_TOKEN]', $joinToken,
                        str_replace('[WHERE_TOKEN]', $whereToken, 
                        str_replace('[GROUP_BY_TOKEN]', $groupToken, 
                        str_replace('[ORDER_TOKEN]', $orderToken, 
			    Queries::GET_ORDER_LIST_TEMPLATE)))));
	}

	public static function GET_ORDER_DASHBOARD()
	{
		return self::Build(self::$SELECT_LIST_FRAGMENT, null, self::$DATE_FRAGMENT, self::$GROUP_BY_FRAGMENT, null);
	}

	public static function GET_ORDER_LIST()
	{
		return self::Build(self::$SELECT_LIST_FRAGMENT, null, self::$DATE_FRAGMENT, null, null);
	}

	public static function GET_ORDER_LIST_FULL()
	{
		return self::Build(self::$SELECT_LIST_FRAGMENT, null, null, null, null);
	}
}
?>
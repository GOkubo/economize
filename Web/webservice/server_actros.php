<?php
define('ROOT_DIR', '../../');
require_once(ROOT_DIR . 'Web/webservice/NuSoap/lib/nusoap.php');
require_once(ROOT_DIR . 'Web/webservice/WebservicePage.php');

$server = new nusoap_server;
$server->configureWSDL('server', 'urn:server');
$server->wsdl->schemaTargetNamespace = 'urn:server';

$server->register(  'registerDepartment',
                    array('xmlGasCommand' => 'xsd:string'),  //parameter
                    array('return' => 'xsd:string'),  //output
                    'urn:server',   //namespace
                    'urn:server#registerDepartmentServer',  //soapaction
                    'rpc', // style
                    'encoded', // use
                    'registerDepartment');  //description

$server->register(  'GetDepartments',
                    array(),  //parameter
                    array('return' => 'tns:ArrayDepartments'),  //output
                    'urn:server',   //namespace
                    'urn:server#GetDepartmentsServer',  //soapaction
                    'rpc', // style
                    'encoded', // use
                    'GetDepartments');  //description

$server->wsdl->addComplexType( 'Departments', 'complexType', 'struct', 'all', '',
                                array(
                                        'departmentId' => array('name' =>'departmentId', 'type' => 'xsd:string'),
                                        'idLevel1' => array('name' => 'idLevel1', 'type' => 'xsd:string'),
                                        'idLevel2' => array('name' => 'idLevel2', 'type' => 'xsd:string'),
                                        'name' => array('name' => 'name', 'type' => 'xsd:string'),
                                        'statusId' => array('name' => 'statusId', 'type' => 'xsd:string')
                                )
                             );

$server->wsdl->addComplexType( 'ArrayDepartments', 'complexType', 'array', '', 'SOAP-ENC:Array',
                               array(), array(array('ref' => 'SOAP-ENC:arrayType', 'wsdl:arrayType' => 'tns:Departments[]')), 'tns:Departments'
                             );

function localErroXML($parser,$data){
        global $xmlError;
        $xmlError .= $data;
}

// Função que faz a validação do usuário
function doAuthenticate() {
        if (isset($_SERVER['PHP_AUTH_USER']) and isset($_SERVER['PHP_AUTH_PW'])) {
                if ($_SERVER['PHP_AUTH_USER'] == "perdig@" && $_SERVER['PHP_AUTH_PW'] == "tonh0") {
                        return true;
                } else {
                        return false;
                }
        }
}

function registerDepartment($xmlChecklistPhotos) {
        $page = new WebservicePage();
        return $page->registerDepartment($xmlChecklistPhotos);
}

function GetDepartments() {
        if (!doAuthenticate()){
                return false;
        } else {
                $page = new WebservicePage();
                return $page->getDepartments();
        }
}
 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
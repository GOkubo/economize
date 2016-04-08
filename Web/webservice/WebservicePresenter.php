<?php
require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'Domain/namespace.php');

class WebservicePresenter
{
	/**
	 * @var \DepartmentRepository
	 */
	private $departmentRepository;

	/**
	 * @param DepartmentRepository $departmentRepository
	 */
	public function __construct(DepartmentRepository $departmentRepository)
	{
		$this->departmentRepository = $departmentRepository;
	}

	public function getDepartments()
	{
                $departments = $this->departmentRepository->GetAll();
                $departmentArray = array();
                foreach ($departments as $department){
                        $departmentSimple=array();
                        $departmentSimple["departmentId"]=$department->Id();
                        $departmentSimple["idLevel1"]=$department->IdLevel1();
                        $departmentSimple["idLevel2"]=$department->IdLevel2();
                        $departmentSimple["name"]=$department->Name();
                        $departmentSimple["statusId"]=$department->Status();
                        $departmentArray[]=$departmentSimple;
                }
                return $departmentArray;
	}

	public function registerDepartment($xmlGasCommand)
	{
                $xmlGasCommand = utf8_encode($xmlGasCommand);
                $data = date("Y.m.d")."_".date("H.i.s");
                $log = "Integração Autorização Abastecimento (GasCommand) \r\n";
                $logName = ROOT_DIR . "Web/webservice/logs/gasCommand_".$data.".txt";
                $xmlNameIn = ROOT_DIR . "Web/webservice/xml/gasCommand_".$data."_IN.xml";
                $xmlNameOut = ROOT_DIR . "Web/webservice/xml/gasCommand_".$data."_OUT.xml";
                $this->xmlSave($xmlGasCommand, $xmlNameIn);
                $xmlValidate = $this->xmlValidate($xmlNameIn);
                
                if(!is_bool($xmlValidate)){
                        $xmlError = $this->xmlError($xmlValidate);
                        $this->xmlSave($xmlError, $xmlNameOut);
                        return $xmlError;
                }

                $xmlLoad = simplexml_load_string($xmlGasCommand);
                $gasCommandArray = $this->xmlToArray($xmlLoad);
                for($row = 0; $row < count($gasCommandArray['company']); $row++){
                        try {
                                $gasCommandByCode = $this->gasCommandRepository->LoadByCode($gasCommandArray['gasCommandCode'][$row]);
                                if(is_null($gasCommandByCode) && $gasCommandByCode->Id()){
                                        $gasCommand = GasCommand::Create($gasCommandArray['gasCommandId'][$row], $gasCommandArray['gasCommandCode'][$row], 
                                                $gasCommandArray['gasCommandCodeRef'][$row], utf8_decode($gasCommandArray['company'][$row]), 
                                                $gasCommandArray['userId'][$row], $gasCommandArray['gasCommandDate'][$row], $gasCommandArray['odometer'][$row], 
                                                $gasCommandArray['plate'][$row], utf8_decode($gasCommandArray['driver'][$row]), $gasCommandArray['route'][$row], 
                                                $gasCommandArray['km'][$row], $gasCommandArray['gasStation'][$row], $gasCommandArray['liters'][$row], 
                                                $gasCommandArray['totalLiters'][$row], $gasCommandArray['fleetFuel'][$row], $gasCommandArray['status'][$row], 
                                                $gasCommandArray['cte'][$row]);
                                        $this->gasCommandRepository->Add($gasCommand);
                                        $log .= "Registro " . $row . " - INSERT - Data " . $gasCommandArray['gasCommandDate'][$row] . "; Código " . $gasCommandArray['gasCommandCode'][$row] . "; Veículo " . $gasCommandArray['plate'][$row] . " Cadastrado Com Sucesso! \r\n";
                                } else {
                                        $gasCommandByCode->ChangeGasCommandCodeRef($gasCommandArray['gasCommandCodeRef'][$row]);
                                        $gasCommandByCode->ChangeCompany(utf8_decode($gasCommandArray['company'][$row]));
                                        $gasCommandByCode->ChangeUserId($gasCommandArray['userId'][$row]);
                                        $gasCommandByCode->ChangeGasCommandDate($gasCommandArray['gasCommandDate'][$row]);
                                        $gasCommandByCode->ChangeOdometer($gasCommandArray['odometer'][$row]);
                                        $gasCommandByCode->ChangePlate($gasCommandArray['plate'][$row]);
                                        $gasCommandByCode->ChangeDriver(utf8_decode($gasCommandArray['driver'][$row]));
                                        $gasCommandByCode->ChangeRoute($gasCommandArray['route'][$row]);
                                        $gasCommandByCode->ChangeKm($gasCommandArray['km'][$row]);
                                        $gasCommandByCode->ChangeGasStation($gasCommandArray['gasStation'][$row]);
                                        $gasCommandByCode->ChangeLiters($gasCommandArray['liters'][$row]);
                                        $gasCommandByCode->ChangeTotalLiters($gasCommandArray['totalLiters'][$row]);
                                        $gasCommandByCode->ChangeFleetFuel($gasCommandArray['fleetFuel'][$row]);
                                        $gasCommandByCode->ChangeStatus($gasCommandArray['status'][$row]);
                                        $gasCommandByCode->ChangeCte($gasCommandArray['cte'][$row]);
                                        $this->gasCommandRepository->Update($gasCommandByCode);
                                        $log .= "Registro " . $row . " - UPDATE - Data " . $gasCommandArray['gasCommandDate'][$row] . "; Código " . $gasCommandArray['gasCommandCode'][$row] . "; Veículo " . $gasCommandArray['plate'][$row] . " Cadastrado Com Sucesso! \r\n";
                                }
                        } catch (Exception $e) {
                                $log .= "Registro " . $row . " - FALHA - Data " . $gasCommandArray['gasCommandDate'][$row] . "; Código " . $gasCommandArray['gasCommandCode'][$row] . "; Veículo " . $gasCommandArray['plate'][$row] . " Não Cadastrado! Erro: " . $e . " \r\n";
                        }
                }
                $this->logSave($log, $logName);
                return true;
	}
        
        private function xmlToArray($xml)
        {
                $newRow = 0;
                foreach($xml->children() as $tag) {
                        $tagName = $tag->getName();
                        if(!$tag->children()) {
                                $array[$tagName] = trim($tag[0]);
                        } else {
                                foreach($tag->children() as $tagGasCommand) {
                                        $array[$tagGasCommand->getName()][$newRow] = trim($tagGasCommand[0]);
                                }
                                $newRow++;
                        }
                }
                return $array;
        }

        public function xmlError($msg, $decode = false) {  
                $this->erroGravacao = true;
                if(is_array($msg)) {
                        foreach($msg as $numErro => $erro){
                                $errors['erros']['erro-'.$numErro] = $erro;
                        }
                        $xml = $this->array_to_xml($errors);
                } else {
                        $xmlTemp = 'xml version="1.0" encoding="utf-8"
                        <ws_integracao xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';

                        $xmlTemp .= '<erros>';
                        if($decode == true){
                                $xmlTemp .= '<erro>'.utf8_encode($msg).'</erro>';    
                        }else{
                                $xmlTemp .= '<erro>'.$msg.'</erro>';
                        }
                        $xmlTemp .= '</erros>';
                        $xmlTemp .= '</ws_integracao>';
                        $xmlErro = simplexml_load_string($xmlTemp);              
                        $xml = $xmlErro->saveXML();
                }

                $this->erroGravacao = false;
                @$this->conn->RollbackTrans();
                @$this->conn->close();
                return $xml;
        }

        private function xmlSave($xml, $xmlName) {
                $file = fopen($xmlName, 'w');
                fwrite($file, utf8_decode($xml));
                fclose($file);
        }

        private function logSave($log, $logName) {
                $file = fopen($logName, 'w');
                fwrite($file, $log);
                fclose($file);
        }

        private function xmlValidate($xmlName)
        {
                $parser = xml_parser_create();
                xml_set_character_data_handler($parser, 'localErroXML');
                $fp = fopen($xmlName,"r");
                $fileSize = filesize($xmlName);

                while ($data = fread($fp, $fileSize)){
                        if(xml_parse($parser,$data,feof($fp)) ){
                                return true;
                        } else {
                                global $xmlError;
                                return sprintf(" Erro no XML: (%s) na  linha %d, TAG: ".$xmlError."",
                                xml_error_string(xml_get_error_code($parser)),
                                xml_get_current_line_number($parser));
                        }
                }
        }
}
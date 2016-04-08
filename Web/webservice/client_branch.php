<?php
require_once(ROOT_DIR . 'Web/webservice/NuSoap/lib/nusoap.php');
require_once(ROOT_DIR . 'Web/webservice/WebservicePage.php');

class WebserviceClientBranchPage
{
	protected $client;
	protected $page;
//	protected $wsdl = "http://actros.repair.com.br/Web/webservice/server_actros.php?wsdl";
	protected $wsdl = "http://localhost:8080/economize/Web/webservice/server_actros.php?wsdl";
        
	public function __construct()
	{
                ini_set('max_execution_time','1800');
                ini_set("soap.wsdl_cache_enabled", "0");
                $this->page = new WebservicePage();
                $this->client = new nusoap_client($this->wsdl, 'wsdl');
                $err = $this->client->getError();
                if ($err) {
                        Log::Debug('Constructor error ' . $err);
                        echo 'Constructor error ' . $err;
                        exit();
                }
        }
        
        public function localErroXML($parser,$data){
                global $xmlError;
                $xmlError .= $data;
        }
        
	public function sendData()
	{
//                echo '<pre>';print_r($xmlLogBookJourney);exit();
                $xmlGasCommand = $this->page->getGasCommand();
                $this->client->call('registerGasCommand', array('xmlGasCommand'=>$xmlGasCommand));
                $xmlGasCommandJustification = $this->page->getGasCommandJustification();
                $this->client->call('registerGasCommandJustification', array('xmlGasCommandJustification'=>$xmlGasCommandJustification));
                $xmlLogBookJourney = $this->page->getLogBookJourney();
                $this->client->call('registerLogBookJourney', array('xmlLogBookJourney'=>$xmlLogBookJourney));
                $xmlLogBookJourneyCalibrate = $this->page->getLogBookJourneyCalibrate();
                $this->client->call('registerLogBookJourneyCalibrate', array('xmlLogBookJourneyCalibrate'=>$xmlLogBookJourneyCalibrate));
                $xmlLogBookJourneyInterval = $this->page->getLogBookJourneyInterval();
                $this->client->call('registerLogBookJourneyInterval', array('xmlLogBookJourneyInterval'=>$xmlLogBookJourneyInterval));
                $xmlLogBookJourneyMissing = $this->page->getLogBookJourneyMissing();
                $this->client->call('registerLogBookJourneyMissing', array('xmlLogBookJourneyMissing'=>$xmlLogBookJourneyMissing));
                $xmlLogBookJourneyTachograph = $this->page->getLogBookJourneyTachograph();
                $this->client->call('registerLogBookJourneyTachograph', array('xmlLogBookJourneyTachograph'=>$xmlLogBookJourneyTachograph));
                $xmlLogBookJourneyTicket = $this->page->getLogBookJourneyTicket();
                $this->client->call('registerLogBookJourneyTicket', array('xmlLogBookJourneyTicket'=>$xmlLogBookJourneyTicket));
        }
        
	public function sendChecklistPhotos($checklistPhotoId, $checklistPlate, $checklistDate, $checklistHour, $checklistTypeDoc, $checklistImage, $checklistDescription)
	{
                $xmlChecklistPhotos = $this->page->createXmlChecklistPhotos($checklistPhotoId, $checklistPlate, $checklistDate, $checklistHour, $checklistTypeDoc, $checklistImage, $checklistDescription);
                if($this->client->call('registerChecklistPhotos', array('xmlChecklistPhotos'=>$xmlChecklistPhotos))){
                        $this->page->updateChecklistPhotosSuccess($checklistPhotoId, $checklistPlate, $checklistDate, $checklistHour, $checklistTypeDoc, $checklistImage, $checklistDescription);
                        return true;
                } else {
                        return false;
                }
        }
        
	public function getData()
	{
                $users = $this->client->call('GetUsers', array(''));
                $this->page->registerUser($users);
                $drivers = $this->client->call('GetDriver', array(''));
                $this->page->registerDriver($drivers);
                $administrative = $this->client->call('GetAdministrative', array(''));
                $this->page->registerAdministrative($administrative);
                $fleet = $this->client->call('GetFleet', array(''));
                $this->page->registerFleet($fleet);
                $fleetTrailer = $this->client->call('GetFleetTrailer', array(''));
                $this->page->registerFleetTrailer($fleetTrailer);
                $axiodisItambe = $this->client->call('GetAxiodisItambe', array(''));
                $this->page->registerAxiodisItambe($axiodisItambe);
                $axiodisItambeScale = $this->client->call('GetAxiodisItambeScale', array(''));
                $this->page->registerAxiodisItambeScale($axiodisItambeScale);
                $axiodisPlate = $this->client->call('GetAxiodisPlate', array(''));
                $this->page->registerAxiodisPlate($axiodisPlate);
        }
}
?>
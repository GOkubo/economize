<?php
AddUf('AC');
AddUf('AL');
AddUf('AP');
AddUf('AM');
AddUf('BA');
AddUf('CE');
AddUf('DF');
AddUf('ES');
AddUf('GO');
AddUf('MA');
AddUf('MT');
AddUf('MS');
AddUf('MG');
AddUf('PB');
AddUf('PA');
AddUf('PE');
AddUf('PI');
AddUf('PR');
AddUf('RJ');
AddUf('RN');
AddUf('RS');
AddUf('RO');
AddUf('RR');
AddUf('SC');
AddUf('SE');
AddUf('SP');
AddUf('TO');

function AddUf($ufName)
{
	$GLOBALS['APP_UFS'][] = $ufName;
}
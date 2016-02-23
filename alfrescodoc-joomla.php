<?php


    defined('_JEXEC' ) or die; 
    require_once dirname(__FILE__) .'/function.php';
    $url = $params->get('cmisatomURL');
    $port = $params->get('alf_port');
    $userName = $params->get('alf_username');
    $password = $params->get('alf_password');
    $path = $params->get('alf_path');
    $docList = ModAlfrescoHelper::getDocList($url, $port, $userName, $password, $path);
    $alfTicket = ModAlfrescoHelper::getAlfTicket($url, $port, $userName, $password);
    $genPath = $url.":".$port."/share/proxy/alfresco/api/node/workspace/SpacesStore/";
    require(JModuleHelper::getLayoutPath('alfrescodoc-joomla','default'));
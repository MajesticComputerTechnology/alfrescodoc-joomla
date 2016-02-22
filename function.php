<?php

require_once dirname(__FILE__) .'/Alfresco_CMIS_API.php';

class ModAlfrescoHelper{

    function getDocList($url, $port, $userName, $password, $path){
        
        $docList = array();
        $repoObject=new CMISalfObject($url.":".$port."/alfresco/cmisatom",$userName,$password,$path);
        $repoObject->listContent();
        $repoObject->listContent();
        for($i=0; $i<count($repoObject->containedObjects); $i++){
            $docObject = new stdClass();
            $docObject->fileType = $repoObject->containedObjects[$i]->properties['cmis:objectTypeId'];
            $docObject->fileName = $repoObject->containedObjects[$i]->properties['cmis:name'];
            $docObject->title = $repoObject->containedObjects[$i]->aspects['cm:title'];
            $docObject->description = $repoObject->containedObjects[$i]->aspects['cm:description'];
            $docObject->path = str_replace("workspace://SpacesStore/","", $repoObject->containedObjects[$i]->properties['alfcmis:nodeRef']);
            $docObject->thumbnail = $repoObject->containedObjects[$i]->thumbnailUrl;
            $docObject->id = str_replace("workspace://SpacesStore/","", $repoObject->containedObjects[$i]->properties['alfcmis:nodeRef'] );
            array_push($docList, $docObject);
        }
        return $docList;
    }
    
    function getAlfTicket($url, $port, $userName, $password){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url.":".$port."/alfresco/service/api/login?u=".$userName."&pw=".$password);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // execute the request
        $output = curl_exec($ch);

        $xml = new DOMDocument;
        $xml->loadXML($output);
        $ticket = $xml->getElementsByTagName('ticket')->item(0)->nodeValue;
        return $ticket;
    }
}

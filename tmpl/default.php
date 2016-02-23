<link rel="stylesheet" href="modules/mod_alfrescodocument/tmpl/css/style.css">

<div class="alf">

<?php 
    $options = $params->get('options');
     $render = "<div class='alf'>";
        foreach($docList as $doc){
            $downloadLink ="";
            if($doc->fileType === "cmis:folder"){
                $downloadLink = $url.":".$port."/share/page/site/projects/documentlibrary#filter=path%7C%2F".$doc->fileName;
            }else{
                $downloadLink = $params->get('cmisatomURL').':'.$params->get('alf_port').'/alfresco/service/api/node/content/workspace/SpacesStore/'.$doc->path.'/?a=true&amp;alf_ticket='.$alfTicket;
            }
            $render .= "<div class='alf__doc'>";
            // check show thumbnail
            if( $params->get('thumbnail')){
                $render .= "<div class='alf__image'>";
                if($doc->fileType === "cmis:folder"){
                    $render .= $params->get('download')?"<a href='".$downloadLink."' target='_blank'>":"";
                    $render .="<img src='".$url.":".$port."/share/res/components/documentlibrary/images/folder-64.png' alt='".( $params->get('title')?$doc->title:"" )."'> </a>";
                    $render .= $params->get('download')?"</a>":"";
                }else{
                    if($doc->thumbnail != ''){ 
                        $render .= ($params->get('download')? '<a href="'.$params->get('cmisatomURL').':'.$params->get('alf_port') .'/alfresco/service/api/node/content/workspace/SpacesStore/'.$doc->path.'/?a=true&amp;alf_ticket='.$alfTicket.'">': "")."<img src='".$doc->thumbnail."&ticket=".$alfTicket."' alt='".( $params->get('title')?$doc->title:"" )."'>"."</a>";
                    }else{
                        $render .="<img src='".$genPath.''.$doc->path."/content/thumbnails/doclib?c=queue&ph=true' alt='".( $params->get('title')?$doc->title:"" )."'>";
                    }
                }
                
                $render .= "</div>";
            }
            
            
            $render .= "<div class='alf__docInfo'><h3>".($params->get('download')? '<a href="'.$downloadLink.'"  target="_blank">': "").
                
                
            ( $params->get('title')? 
                ($doc->title?
                    $doc->title:   
                        ($params->get('name')?
                            $doc->fileName:
                            ""
                        )
                ): 
                                                         
                ($params->get('name')?
                    $doc->fileName: 
                        ($params->get('title')?
                            $doc->title:
                            ""
                        )
                )
             
            ).($params->get('download')?"</a>":"")."</h3><i>".( $params->get('title')?( $params->get('name')?$doc->fileName:"" ):"")."</i><i>".( $params->get('path')?$doc->path:"" )."</i><p>".( $params->get('description')?$doc->description:"" )."</p></div></div>";
        }
        $render .= "</div>";
        echo $render;
    

    
    
    ?>
</div>



<script src="modules/mod_alfrescodocument/tmpl/js/app.js"></script>




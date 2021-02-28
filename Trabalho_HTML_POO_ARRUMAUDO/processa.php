<?php

include_once 'GerenteBD.php';

 $keyword = isset($_GET["keyword"])? $_GET["keyword"] : NULL; # pegando as palavras do index.html
 $platform = isset($_GET["platform"])? $_GET["platform"] : NULL;
 $type = isset($_GET["type"])? $_GET["type"] : NULL;
  
 $gb = new GerenteBD();
 $gb->setKeyword($keyword);
 $gb->setPlatform($platform);
 $gb->setType($type);
      
 $resultadoKwTpPt = $gb->ByKeywordTypePlatform();
        
?>
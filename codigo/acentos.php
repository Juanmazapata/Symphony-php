<?php

function DarAcento($string){

  $string= str_replace(
  array('&AACUTE;','&EACUTE;','&IACUTE;','&OACUTE;','&UACUTE;','&NTILDE;','&AGRAVE;','&EGRAVE;','&IGRAVE;','&OGRAVE;','&UGRAVE;','&ACIRC;','&ECIRC;','&ICIRC;','&OCIRC;','&UCIRC;','&ATILDE;','&EUML;','&IUML;','&OUML;','&UUML;'),
  array('Á','É','Í','Ó','Ú','Ñ','À','È','Ì','Ò','Ù','Â','Ê','Î','Ô','Û','Ã','Ë','Ï','Ö','Ü'),
  $string
  );
  return $string;
  }

?>

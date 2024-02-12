<?php 
function read( ) 
{ 
  $fp = fopen("php://stdin", "r");
  $in = fgets ($fp,255);
  fclose($fp);
  $ligne = (PHP_OS == "WINNT") ? str_replace ("\r\n", "", $in) : str_replace("\n", "",$in);
  return $ligne ;
}
?>

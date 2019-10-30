<?php
// At the begginnig of script...
ob_start();
// ... do some stuff ...
ob_get_clean();

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Report.xls");  
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

$htmlcode=$_REQUEST["htmlcode"];
echo $htmlcode;
?>
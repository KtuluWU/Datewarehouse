<?php 
// error_reporting(E_ALL || ~E_NOTICE);
ini_set("max_execution_time", 0);
require "../../config/config.php";


/****************************************** Page ******************************************/
$siren = $_POST['siren_apitest'];

echo "<div class='text_FI api_link'>";
echo "<a href='../api_test/pages/PC_page.php?siren_PC=$siren' target='_blank'>https://api.datainfogreffe.fr/api/v1/Entreprise/ProceduresCollectives/<label class='text-rouge'>$siren</label></a>";
echo "</div>";

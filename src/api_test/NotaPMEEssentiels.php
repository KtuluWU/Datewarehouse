<?php 
// error_reporting(E_ALL || ~E_NOTICE);
ini_set("max_execution_time", 0);
require "../../config/config.php";


/****************************************** Page ******************************************/
$siren = $_POST['siren_apitest'];

echo "<div class='text_NPE api_link'>";
echo "<a href='../api_test/pages/NPE_page.php?siren_NPE=$siren' target='_blank'>https://api.datainfogreffe-dev.latelier.co/api/v1/Entreprise/notapme/essentiel/<label class='text-rouge'>$siren</label></a>";
echo "</div>";

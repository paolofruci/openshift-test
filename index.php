<?php
  $dbServer = "172.26.49.16";
  $dbUser = "vmware";
  $dbPassword = "Password1";
  $dbName = "vmware";
  $db  = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
    if ($db->connect_errno) { 
        echo "Connection Failed";

echo "<h1> la mia pagina di test versione 2 </h1>";
echo "<h2> eseguo test sui commit e rebuild di openshift</h2>";
echo "";
?>

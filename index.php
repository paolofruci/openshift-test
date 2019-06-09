<?php
  $dbServer = "172.26.49.16";
  $dbUser = "vmware";
  $dbPassword = "Password1";
  $dbName = "vmware";
  $db  = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
    if ($db->connect_errno) { 
        echo "Connection Failed";
        exit;
    }
    $query = "SELECT * FROM progetti";
    $aResults = array();
    $result = $db->query($query);
    while($row = $result->fetch_assoc()) {
        $aResults[] = $row;
    }
    echo "<pre>";
    print_r($aResults);
    echo "</pre>";

?>

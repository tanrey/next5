<?php 

header('Content-Type: application/json');

$fp = fopen("racedata.json", "rb");

fpassthru($fp);

exit;


?>

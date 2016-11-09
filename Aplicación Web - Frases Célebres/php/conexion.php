<?php

require_once( "./config/config.php" );

$cnx = new PDO( ADAPTER . ':host=' . HOST . ';dbname=' . DBNAME, USER, PASS );

?>
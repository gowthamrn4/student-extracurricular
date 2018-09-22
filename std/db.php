<?php
session_start();
extract($_REQUEST);
$dbconn=mysql_connect("localhost","root","");
$dbselect=mysql_select_db("data",$dbconn);
?>

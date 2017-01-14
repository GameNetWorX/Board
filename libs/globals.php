<?php
error_reporting(E_ALL);
include_once('./libs/config.php');
include_once('./libs/Datenbank.php');
include_once('./libs/Page.class.php');
include_once('./libs/functions.php');

$db = new Database($cfg['host'], $cfg['user'], $cfg['pass'], $cfg['name']);
?>
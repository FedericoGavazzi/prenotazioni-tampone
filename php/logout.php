<?php
require '../vendor/autoload.php';
use League\Plates\Engine;
include_once 'config.php';
session_destroy();
$_SESSION = array();
$templates = new Engine('../view', 'tpl');

echo $templates->render('logout');

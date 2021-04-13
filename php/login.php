<?php
require '../vendor/autoload.php';
use League\Plates\Engine;
$templates = new Engine('../view', 'tpl');

echo $templates->render('login',[]);

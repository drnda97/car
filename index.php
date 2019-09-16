<?php
session_start();

foreach (glob('./classes/*') as $class_name) {
	require($class_name);
}

foreach (glob('./model/*') as $model_name) {
	require($model_name);
}

require('./db.php');

$router = new Router();

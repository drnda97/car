<?php

$conn = new mysqli('localhost', 'root', '', 'project');

$conn->query("SET NAMES utf8");
$conn->query("SET CHARACTER SET utf8");
$conn->query("SET COLLATION_CONNECTION='utf8_general_ci'");

define("WEBROOT", "http://www.project.com");

<?php
	session_start();
	require_once('app/core/autoload.php');
	require('app/core/phpqrcode/qrlib.php');
	include_once('app/core/i18n.php');
	define('BASE', 'http://localhost');
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$db['default'] = array(
	'dsn' => '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'ciapp',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE, // make sure pconnect is set to false for sessions to work
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'autoinit' => TRUE,
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
	);

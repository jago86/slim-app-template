<?php
ORM::configure(array(
	    'connection_string' => 'mysql:host='.DB_HOST.';dbname='.DB_NAME,
	    'username' => DB_USER,
	    'password' => DB_PASSWORD
));


ORM::configure('return_result_sets', true); // returns result sets
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
ORM::configure('error_mode', PDO::ERRMODE_WARNING);
ORM::configure('logging', true);

ORM::configure('id_column_overrides', array(
    // 'table'              => 'primary_key_name',
));
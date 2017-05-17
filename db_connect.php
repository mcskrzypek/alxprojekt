<?php
include "config.php";
include "library/common.php";
pg_connect("
	host={$config['db_host']} 
	dbname={$config['db_name']}  
	user={$config['db_user']}  
	password={$config['db_password']}
");
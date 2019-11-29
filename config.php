<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$config_db = array(
		'db_host' => 'localhost',
		'db_user' => 'root',
		'db_name' => 'spam_link',
		'db_pass' => ''
	);
	$conn = mysqli_connect($config_db['db_host'], $config_db['db_user'], $config_db['db_pass'], $config_db['db_name']);
	mysqli_set_charset($conn,"utf8");
?>
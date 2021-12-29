<?php 
		
	define('BASE_URL', 'http://localhost/php_21_sep/crud/');
	define('SERVER_NAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DBNAME', 'php_21_sep');
	define('BSLINK', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');
	
	define('ALLOW_EXT', array('jpg','png','jpeg'));
	define('FILE_MAX_SIZE', 200);
	
	
	function formatArray(object $data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}	

?>
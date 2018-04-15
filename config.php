<?php 
	define('DB_NAME', 'holiday_turismo'); //nome do banco de dados

	define('DB_USER', 'root'); //usuário do banco de dados MySQL

	define('DB_PASSWORD', ''); //senha do banco de dados MySQL

	define('DB_HOST', 'localhost');	//nome do host do MySQL	

	if ( !defined('BASEURL') )		
		define('BASEURL', '/Projeto pessoal - Holiday Turismo/');			

	//diretório do arquivo de banco de dados
	if ( !defined('DBAPI') )		
		define('DBAPI', '/classe_bd.php');

	define('HEADER_TEMPLATE', 'header.php');	
	define('FOOTER_TEMPLATE', 'footer.php');
?>
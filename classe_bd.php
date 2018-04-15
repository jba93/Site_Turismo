<?php
	class db 
	{
		//host - endereço onde o MySQL está instalado
		private $host = 'localhost'; //é servidor local

		//usuário de conexão com o MySQL
		private $usuario = 'root'; //usuário padrão da instalação do MySQL

		//senha do usuário de conexão com o MySQL
		private $senha = ''; //senha padrão do usuário root

		//banco de dados
		private $database = 'holiday_turismo';

		public function conecta_mysql()
		{
			//criando a conexão com a função nativa e armazena na variável
			//mysqli_connect() retorna: false para falha de conexão; objeto representando a conexão para sucesso
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			//ajustar charset de comunicação entre a aplicação e o bd
			mysqli_set_charset($con, 'utf8');

			//verificar se houve erro de conexão
			//msqli_connect_errno() retorna o código do erro, se não há erro ela retorna 0
			if (mysqli_connect_errno()) 
			{
				//exibe a descrição do erro para o usuário
				echo "Erro ao tentar se conectar com o MySQL: ".mysqli_connect_error();
			}

			return $con;
		}
	}

?>
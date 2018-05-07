<?php

	class db{
		private $host = 'mysql762.umbler.com';
		private $user = 'micael';
		private $pass =	'22setembro';
		private $db   =	'assistec';


		public function conectar(){
			try {
			
				$conexao_mysql = "mysql:host=$this->host;dbname=$this->db";
				$conexaoDB = new PDO($conexao_mysql, $this->user, $this->pass);

			} catch (PDOException $e) {
				
				echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
			
			}

			
				
		}

		//private function __construct(){
		//	$this->con = new mysqli("localhost","micael"."22setembro","assistec");

		//}
		//public function query($sql){
		//	return $this->con->query($sql);
		//}
	}
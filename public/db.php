<?php

	class db{
		private $host = 'localhost';
		private $user = 'micael';
		private $pass =	'22setembro';
		private $db   =	'assistec';


		public function conectar(){
			$conexao_mysql = "mysql:host=$this->host;dbname=$this->db";
			$conexaoDB = new PDO($conexao_mysql, $this->user, $this->pass);
			$conexaoDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			$conexaoDB->exec("set names utf8");

		}

		//private function __construct(){
		//	$this->con = new mysqli("localhost","micael"."22setembro","assistec");

		//}
		//public function query($sql){
		//	return $this->con->query($sql);
		//}
	}
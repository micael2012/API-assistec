<?php

	class db{
		private $HOST = 'localhost';
		private $USER = 'micael';
		private $PASS =	'22setembro';
		private $DB   =	'assistec';


		public function conectar(){
			$conexao_mysql = "mysql:host=$this->HOST;dbname=$this->DB";
			$conexaoDB = new PDO($conexao_mysql, $this->USER, $this->PASS);
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
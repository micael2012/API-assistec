<?php

	class db{
		private function __construct(){
			$this->con = new mysqli("localhost","micael"."22setembro","assistec");

		}
		public function query($sql){
			return $this->con->query($sql);
		}
	}
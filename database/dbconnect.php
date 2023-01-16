<?php
	class dbconnect
	{
		public $host = "127.0.0.1";
        public $username = "root";
        public $password = "";
        public $database = "bookshop";
        public $db;
        public function __construct(){
            $this->db = new mysqli($this->host,$this->username,$this->password,$this->database);
        }
       public function getData($sqlquery){
           $result = $this->db->query($sqlquery);
           mysqli_close($this->db);
           return $result;
       }
       public function insertData($sqlquery){
        $this->db->query($sqlquery);
        mysqli_close($this->db);

        }
        public function updateData($sqlquery){
            $this->db->query($sqlquery);
            mysqli_close($this->db);

        }
	}

 ?>

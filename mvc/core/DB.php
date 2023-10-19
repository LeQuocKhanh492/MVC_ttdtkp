<?php
    class DB{
        public $conn;
        protected $severName = "localhost";
        protected $user = "root";
        protected $pw= "";
        
        protected $dbName = "qltv_mvc";
        
        function __construct(){
            $this -> conn = mysqli_connect($this -> severName, $this -> user, $this -> pw, $this -> dbName);
            mysqli_select_db($this -> conn, $this -> dbName);
            mysqli_query($this -> conn,"SET NAMES 'utf8'");
        }
    }

?>
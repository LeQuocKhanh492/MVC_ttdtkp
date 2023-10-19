<?php
    class SinhvienModel extends DB{
        public function getSv(){
            return "khánh";
        }

        public function sinhvien()
        {
            $query = "SELECT * FROM thanhvien";
            return mysqli_query($this -> conn, $query);
        }
    }
    class Sinhvien{
        public $ID;
        public $HOTEN;
        public $NAMSINH;
        public $QUEQUAN;
        
        public function __construct($id,$hoten,$namsinh,$quequan)
        {   
            $this -> ID = $id;
            $this ->HOTEN = $hoten;
            $this -> NAMSINH = $namsinh;
            $this ->QUEQUAN = $quequan;
        }
        public function toArray() {
            return [
                "ID" => $this->ID,
                "HOTEN" => $this->HOTEN,
                "NAMSINH" => $this->NAMSINH,
                "QUEQUAN" => $this->QUEQUAN,
            ];
        }
    }

?>
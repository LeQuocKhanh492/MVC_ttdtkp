<?php
    class TinhtongModel extends DB{
        public $ID;
        public $HOTEN;
        public $NAMSINH;
        public $QUEQUAN;
        public function tinhtong($a, $b) 
        {
            return $a + $b;
        }
        public function sinhvien()
        {
            $query = "SELECT * FROM thanhvien";
            return mysqli_query($this -> conn, $query);
        }
        public function getSinhvienData($id,$hoten,$namsinh,$quequan) {
            $this -> ID = $id;
            $this ->HOTEN = $hoten;
            $this -> NAMSINH = $namsinh;
            $this ->QUEQUAN = $quequan;
            // Thực hiện truy vấn cơ sở dữ liệu và trả về dữ liệu sinh viên
        }
    }
?>
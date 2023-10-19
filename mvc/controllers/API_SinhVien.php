<?php
    class API_Sinhvien extends controller{
        public function DanhSach(){
            $sinhvien = $this -> model("SinhvienModel");
            $sv = $sinhvien -> sinhvien();
            $mang = [];
            while($s = mysqli_fetch_array($sv))
            {
                array_push($mang, new Sinhvien($s["id"],$s["hoten"],$s["namsinh"],$s["quequan"],));
            }
            // while($s = mysqli_fetch_array($sv))
            // {
            //     array_push($mang, new Sinhvien1($s["id"],$s["hoten"],$s["namsinh"],$s["quequan"]));
            // }
            echo "<pre>";
            echo json_encode($mang,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
    }

?>
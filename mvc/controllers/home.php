<?php
    class home extends controller{
        function Sayhi(){
            // echo "home-sayhi";
            $teo = $this -> model("SinhvienModel");
            echo $teo -> getSv();
        }
        function show(){
            echo "home-show";
        }
        function sum_1($a, $b){
            $sum = $this -> model("tinhtongModel");
            $tong = $sum -> tinhtong($a, $b);
            $page = "news";
            $this -> view("aodepView",["number" => $tong,
            "SV" => $sum -> sinhvien(),
            "page" => $page = 'hottrend']);
        }
    }


?>

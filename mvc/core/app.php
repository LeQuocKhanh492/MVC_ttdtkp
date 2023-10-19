<?php
    class App{
        
        protected $controller = "home";
        protected $action = "Sayhi";

        protected $params = [];
        public function __construct(){
        
            $arr = $this -> urlProcess();
            // print_r($arr);

            // xử lý controlller
            if(isset($arr[0]))
            {
                if(file_exists("./mvc/controllers/" . $arr[0]. ".php"))
                {
                    $this -> controller = $arr[0];
                }
                unset($arr[0]);
            }
            require_once "./mvc/controllers/" . $this -> controller. ".php";
            $this->controller = new $this->controller;
            // xử lý action
            if(isset($arr[1])){
                if(method_exists( $this -> controller, $arr[1]) )
                {
                    $this -> action = $arr[1];
                }
                unset($arr[1]);
            }
            //xử lý params
            $this -> params = $arr ? array_values($arr) : [];
            // echo "<pre>";
            // // print_r($arr);
            // echo $this -> controller . "<br>";
            // echo $this -> action . "<br>";
            // print_r($this -> params);
            // call_user_func_array([$this -> controller, $this -> action ], $this -> params);
            call_user_func_array([$this ->controller, $this->action], $this->params );

        }
        public function urlProcess()    
        {
            if(isset($_GET['url'])){
              return  explode("/", filter_var(trim($_GET['url'],"/")));
            }
        }   
    }
?>
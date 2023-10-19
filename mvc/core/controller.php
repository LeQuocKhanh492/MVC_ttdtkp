<?php
    class controller{
        public function model($model){
            require_once "./mvc/modules/" . $model.".php";
            return new $model;
        }
        public function view($view, $data = []){
        {
            require_once "./mvc/views/" . $view . ".php";
        }
    }
    }

?>
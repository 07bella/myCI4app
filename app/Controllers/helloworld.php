<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    class Helloworld extends BaseController{
        public function index(){
            echo 'Hello World';
        }
        public function biodata(){
            echo 'Hai nama saya Bella';
        }
        public function asal($kota){
            echo 'Saya berasal dari '.$kota;
        }
    }
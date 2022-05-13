<?php

class Routes {
    public static function methodGet($url, $action) {
        if($url == $_SERVER['REQUEST_URI']  && $_SERVER['REQUEST_METHOD'] == 'GET') {

            header('Access-Control-Allow-Headers: *');

            header('Access-Control-Allow-Origin: *');
            
            header('Access-Control-Allow-Methods: GET, POST');

            Header("Access-Control-Allow-Credentials", "true");

            $action();
        }
    }

    public static function methodPost($url, $action) {
        if($url == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == 'POST') {

            header('Access-Control-Allow-Headers: *');

            header('Access-Control-Allow-Origin: *');
            
            header('Access-Control-Allow-Methods: GET, POST');

            Header("Access-Control-Allow-Credentials", "true");

            $action();
        }
    }
}
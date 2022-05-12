<?php

class Routes {
    public static function methodGet($url, $action) {
        if($_SERVER['REQUEST_URI'] == $url && $_SERVER['REQUEST_METHOD'] == 'GET') {

            $action();
        }
    }

    public static function methodPost($url, $action) {
        if($url == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $action($_POST);
        }
    }
}
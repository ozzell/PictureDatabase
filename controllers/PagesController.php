<?php

/*
 * Pages Controller.
 */

class PagesController {

    public function home() {
        // Image gallery
        $dirname = 'uploads/';
        $images = scandir($dirname);
        //print_r($images); die();
        shuffle($images);
        $ignore = array(".", "..");
        
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }

}

<?php

require 'config.php';
require 'functions.php';

class File {

    private static $_supportedFormats = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];

    public static function upload($file) {
        if (is_array($file)) {

            if (in_array($file['type'], self::$_supportedFormats)) {

                move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
                createThumbnail($file['name']);

                return "code=000";
            } else {
                return "code=002";
            }
        } else {
            return "code=003";
        }
    }

}

?>
<?php

/* 
 * Database Connection.
 */
class Database {
    private static $instance = null;
    
    private function __init() {}
    private function __copy() {}
    
    public function getInstance() {
        if (!isset(self::$instance)) {
            try {
                
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO(
                        'mysql:host=localhost; dbname=mymvc', 'ozzell', 'ozzell', $pdo_options
                        );
                
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
        return self::$instance;
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Post {

    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content) {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
    }

    public static function all() {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM posts');
        
        // We create a list of Post-objects from the database results
        foreach ($req->fetchAll() as $post) {
            //print_r($post['author']); die();
            $list[] = new Post($post['id'], $post['author'], $post['content']);
        }
        
        return $list;
    }

    public static function find($id) {
        $db = Database::getInstance();

        // We make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');

        // The query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        return new Post($post['id'], $post['author'], $post['content']);
    }

}

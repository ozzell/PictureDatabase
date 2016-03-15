<?php

/* 
 * Posts Controller
 */
class PostsController {
    
    public function index() {
        $posts = Post::all();
        //print_r($posts); die();
        require_once 'views/posts/index.php';
    }
    
    public function show() {
        if (!isset($_GET['id'])) {
            call('pages', 'error');
        }
        
        $post = Post::find($_GET['id']);
        require_once 'views/posts/show.php';
    }
}


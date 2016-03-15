<?php

/*
 * Uploads Controller.
 */

class UploadsController {

    public function handleUpload() {
        require_once 'PagesController.php';
        File::upload($_FILES['file']);
        (new PagesController())->home();
    }

}

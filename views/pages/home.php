<div class="jumbotron page-header">
    <div class="container">
        <h1>Picture Database</h1>
        <p>Upload and view pictures quickly and easily! Still under construction.</p>

        <form action="<?php $_SERVER['PHP_SELF'] ?>?controller=uploads&action=handleUpload" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file"><br />
            <input class="btn btn-primary btn-lg" type="submit" value="Upload now &raquo;" name="submit">
            <input type="hidden" name="goback" value="<?php echo $_SERVER['PHP_SELF']; ?>">
        </form>
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <h2>Gallery</h2>
            <p>Uploaded pictures</p>
            <?php
            foreach ($images as $curimg) {
                if (!in_array($curimg, $ignore)) {
                    echo "<li class=\"img-list\"><a href='" . $dirname . $curimg . "' target='_blank'><img src='" . $dirname . '/thumbs/' . $curimg . "' alt='' /></a></li>";
                }
            }
            ?>
        </div>
    </div>
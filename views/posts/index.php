<div class="jumbotron page-header">
    <div class="container">
        <h1>Posts</h1>
        <p>(Under Construction!)</p>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <h2>Here is a list of posts</h2>

		<?php foreach ($posts as $post) { ?>
		    <p>
		        <?php echo "<b>Author:</b> " . $post->author; ?>
		        <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
		    </p>
		<?php } ?>
    </div>
</div>

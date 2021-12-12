Post Details <hr/>
<div class="postcontent">
   <?php foreach ($postbyid as $key => $value) {
   	
    ?>
	<div class="detail">
		<div class="title">
			<h2><?php echo $value['title']; ?></h2>
			<p>Category:<a href="<?php echo BASE_URL; ?>/Index/postByCat/<?php echo $value['cat']; ?>"><?php echo $value['name']; ?></a></p>
		</div>
		<div class="desc">

			<?php echo $value['content']; ?>

		</div>
	</div>

	<?php } ?>

</div>
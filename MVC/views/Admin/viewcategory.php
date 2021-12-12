<div class="postcontent">

	<div class="thumbnail">
		<div class="row text-center" style="margin:0;">
			<div class="col-md-2" style="background:#4ba7a7;height:40px;padding:8px;">
				No.
			</div>
			<div class="col-md-5" style="background:#428c8c;height:40px;padding:8px;">
				<th>CategoryName</th>
			</div>
			<div class="col-md-5" style="background:#4d9898;height:40px;padding:8px;">
				<th>Action</th>
			</div>
		</div>
		<?php $count=1; ?>
		<?php foreach ($catlist as $key => $value) {  ?> 
		<div class="row text-center" style="padding:3px;">
			<div class="col-md-2"><?php echo $count++; ?></div>
			<div class="col-md-5"><?php echo $value['cat_title']; ?></div>
			<div class="col-md-5">
				<div class="row" style="margin:0;">
					<div class="col-md-6">
						<form class="form-horizontal" action="http://localhost/MVC/CategoryController/updateCategory/<?php echo $value['cat_id']; ?>" method="post">
							<button type="submit" class="btn btn-xs" style="background:none;"><img src="http://localhost/MVC/webroot/img/edit.jpg"></button>
						</form>
					</div>
					<div class="col-md-6">
					    <a href="http://localhost/MVC/CategoryController/deleteCategory/<?php echo $value['cat_id']; ?>" onclick="return confirm('Are you sure?')"><img src="http://localhost/MVC/webroot/img/delete.jpg"></a>
						<!-- <form class="form-horizontal" action="http://localhost/MVC/CategoryController/deleteCategory/<?php echo $value['cat_id']; ?>" method="post">
							<input type="hidden" name="updateCat" value="<?php echo $value['cat_id']; ?>">
							<button type="submit" class="btn btn-xs" style="background:none;"><img src="http://localhost/MVC/webroot/img/delete.jpg"></button>
						</form> -->
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

</div>
</div>
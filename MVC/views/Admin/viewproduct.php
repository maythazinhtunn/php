<div class="postcontent">

	<div class="thumbnail">
		<div class="row text-center" style="margin:0;">
			<div class="col-md-1" style="background:#428c8c;height:40px;padding:8px;">
				No.
			</div>
			<div class="col-md-3" style="background:#4ba7a7;height:40px;padding:8px;">
				<th>ProductName</th>
			</div>
			<!-- <div class="col-md-2" style="background:#4ba7a7;height:40px;padding:8px;">
				ProductImage
			</div> -->
			<div class="col-md-2" style="background:#428c8c;height:40px;padding:8px;">
				ProductPrice
			</div>
			<div class="col-md-3" style="background:#4ba7a7;height:40px;padding:8px;">
				ProductDescription
			</div>
			<div class="col-md-3" style="background:#4d9898;height:40px;padding:8px;">
				<th>Action</th>
			</div>
		</div>
		<?php $count=1; ?>
		<?php foreach ($productlist as $key => $value) {  ?> 
		<div class="row text-center" style="padding:2px;">
			<div class="col-md-1"><?php echo $count++; ?></div>
			<div class="col-md-3"><?php echo $value['product_title']; ?></div>
			<!-- <div class="col-md-2"><?php echo $value['product_image']; ?></div> -->
			<div class="col-md-2"><?php echo $value['product_price']; ?></div>
			<div class="col-md-3">
			   <p>
			      <?php if (strlen($value['product_desc']) > 5) {
				  $desc = substr($value['product_desc'], 0,10);
				  echo $desc."....";
			      }else{
			      	echo $value['product_desc'];
			      } ?>
			  </p>
			</div>
			<div class="col-md-3">
				<div class="row" style="margin:0;">
					<div class="col-md-6">
						<form class="form-horizontal" action="http://localhost/MVC/Product/updateProduct/<?php echo $value['product_id']; ?>" method="post">
							<button type="submit" class="btn btn-xs" style="background:none;"><img src="http://localhost/MVC/webroot/img/edit.jpg"></button>
						</form>
					</div>
					<div class="col-md-6">
						<form class="form-horizontal" action="http://localhost/MVC/Product/deleteProduct/<?php echo $value['product_id']; ?>" method="post">
							<button type="submit" class="btn btn-xs" style="background:none;"><img src="http://localhost/MVC/webroot/img/delete.jpg"></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

</div>
</div>
     <aside class="sidebar">
    	<div class="widget">
    		<h2>Category</h2>
    		<ul>
               <?php foreach ($catlist as $key => $value) { 
                $cat_id = urlencode(serialize($value['cat_id'])); ?> 

    			   <li><a href="<?php echo BASE_URL;?>/Product/viewProductByCatId/<?php echo $cat_id; ?>"><?php echo $value['cat_title']; ?></a></li>

                <?php } ?>
    		</ul>
    	</div>

    	<div class="widget">
    		<h2>Brand</h2>
    		<ul>
                <?php foreach ($brandlist as $key => $value) {  

                $brand_id = urlencode(serialize($value['brand_id'])); ?>

                   <li><a href="<?php echo BASE_URL;?>/Product/viewProductByBrandId/<?php echo $brand_id; ?>"><?php echo $value['brand_title']; ?></a></li>

                <?php } ?>
    		</ul>
    	</div>

    </aside>
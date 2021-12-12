<?php include "inc/header.php"; ?>

  <div class="main_content">
    <h1>Category List</h1><hr>
    <?php
       foreach ($cat as $key => $value) {
       	echo $value['name']."<br/>";
       }
    ?>
  </div>


<?php include "inc/footer.php"; ?>
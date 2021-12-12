<?php include "inc/header.php"; ?>

  <div class="main_content">
    <h1>Category By Id</h1><hr>
    <?php
       foreach ($catbyid as $key => $value) {
       	echo $value['name']."<br/>";
       }
    ?>
  </div>


<?php include "inc/footer.php"; ?>
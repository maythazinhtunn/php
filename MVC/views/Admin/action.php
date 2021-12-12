<?php
if($_FILES['file']['name'] != ''){

	echo $_FILES['file']['name'];

    $test = explode(".", $_FILES['file']['name']);
    $extension = end($test);
    $name = rand(100,999).'.'.$extension;
    $location='images/'.$name;
    
    //move_uploaded_file($_FILES['file']['tmp_name'],$location);
    //echo"<script>alert($a);</script>";
    echo '<img src="'.$location.'" width="200" height="150">';

    }

?>
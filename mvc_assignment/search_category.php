<?php
 include 'controllers/category_cntrl.php';
 $key=$_GET["key"];
 $category=search($key);
 if(count($category)>0){
     foreach($category as $c){
         echo "<p>".$c["name"]."</p>";
     }
 }
?>
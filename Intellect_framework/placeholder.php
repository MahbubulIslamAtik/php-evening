<?php
  if(isset($_GET["page"])){

    $page=$_GET["page"];
           
    if($page=="product"){
        include("pages/product.php");
    }elseif($page=="service"){
        include("pages/service.php");
    }elseif($page=="contact"){
        include("pages/contact.php");
    }elseif($page=="home"){
        include("pages/default.php");
    }elseif($page=="help"){
       include("pages/help.php");
    }   
   
  }

?>
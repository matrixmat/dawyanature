<?php

if(isset($_GET["id"])){
    $id=$_GET["id"];
    if(!empty($id)&& is_numeric($id))
    {
        include("connexion.php");
        $query="DELETE FROM  `modifierphp` WHERE id=$id";
        $conn->query($query);
        header("location:listAr.php");

    }
}


?>
<?php
$titre="";
$image="";
$text="";
$dure="";
if(isset($_POST['titre'])){
    $titre=$_POST["titre"];
    $dure=$_POST["dure"];
    $image=$_POST["image"];
    $text=$_POST["text"];


    header("location:listAr.php");
    include("connexion.php");
    $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`,`dure`) VALUES ('$titre','$image','$text','$dure')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    // $s=$conn->query($query);


// }
// if(isset($_POST['image'])){
  
    // include("connexion.php");
    // $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`) VALUES ('$titre','$image','$text')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    // $s=$conn->query($query);


// }
// if(isset($_POST['text'])){

    // include("connexion.php");
    // $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`) VALUES ('$titre','$image','$text')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    // $s=$conn->query($query);


// }
// if(isset($_POST['dure'])){
    // include("connexion.php");
    // $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`,`dure`) VALUES ('$titre','$image','$text','$dure')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
     $s=$conn->query($query);



}






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>les activitées</h1>
    <form method="post" action="">
        Titre: <input type="text" name="titre">
        <br> <br>
        image: <input type="file" name="image">
        <br> <br>
        text: <textarea name="text" id="" cols="30" rows="10"></textarea>
        <br> <br>
        dure: <input type="text" name="dure">
        <br>  <br> 
        <input type="submit" value="envoyer" name="submit" style='background-color:green'>
    </form>
    
</body>
</html>
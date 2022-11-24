<?php
include("connexion.php");
if (isset($_POST["titre"])){
    $id=$_GET["id"];
    $titre=$_POST["titre"];
    $query = "UPDATE `modifierphp` SET `titre`='$titre' WHERE `id`=$id";
    $conn->query($query);
    echo $_POST["titre"];
}

$titre="";
if(isset($_GET["id"])){
    $id=$_GET["id"];
    if(!empty($id)&& is_numeric($id)){
    
    $query="SELECT * FROM `modifierphp` WHERE id=$id";
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);
    $data=$s->fetch_all(1);
    $titre=$data[0]["titre"];
   
    }
}


if (isset($_POST["image"]) && $_POST["image"] != ''){
    $id=$_GET["id"];
    $image=$_POST["image"];
    $query = "UPDATE `modifierphp` SET `image`='$image' WHERE `id`=$id";
    $conn->query($query);
    echo $_POST["image"];
}

$image="";
if(isset($_GET["id"])){
    $id=$_GET["id"];
    if(!empty($id)&& is_numeric($id)){
    
    $query="SELECT * FROM `modifierphp` WHERE id=$id";
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);
    $data=$s->fetch_all(1);
    $image=$data[0]["image"];
   
    }
}



if (isset($_POST["text"])){
    $id=$_GET["id"];
    $text=$_POST["text"];
    $query = "UPDATE `modifierphp` SET `text`='$text' WHERE `id`=$id";
    $conn->query($query);
    echo $_POST["text"];
}

$text="";
if(isset($_GET["id"])){
    $id=$_GET["id"];
    if(!empty($id)&& is_numeric($id)){
    
    $query="SELECT * FROM `modifierphp` WHERE id=$id";
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);
    $data=$s->fetch_all(1);
    $text=$data[0]["text"];
   
    }
}


if (isset($_POST["dure"])){
    $id=$_GET["id"];
    $dure=$_POST["dure"];
    $query = "UPDATE `modifierphp` SET `dure`='$dure' WHERE `id`=$id";
    $conn->query($query);
    echo $_POST["dure"];
}

$dure="";
if(isset($_GET["id"])){
    $id=$_GET["id"];
    if(!empty($id)&& is_numeric($id)){
    
    $query="SELECT * FROM `modifierphp` WHERE id=$id";
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);
    $data=$s->fetch_all(1);
    $dure=$data[0]["dure"];
   
    }
}



/*
$titre="";
$image="";
$text="";
$dure="";
if(isset($_POST['titre'])){
    $titre=$_POST["titre"];
    $dure=$_POST["dure"];


    header("location:listAr.php");
    include("connexion.php");
    $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`) VALUES ('$titre','$image','$text')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);


// }
// if(isset($_POST['image'])){
    $image=$_POST["image"];
    include("connexion.php");
    $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`) VALUES ('$titre','$image','$text')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);


// }
// if(isset($_POST['text'])){
    $text=$_POST["text"];
    include("connexion.php");
    $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`) VALUES ('$titre','$image','$text')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);


// }
// if(isset($_POST['dure'])){
    include("connexion.php");
    $query="INSERT INTO `modifierphp`(`titre`, `image`, `text`,`dure`) VALUES ('$titre','$image','$text','$dure')"; 
    // $ftch=$conn-(" INSERT INTO modifierphp VALUES ('$titre','$image','$text');");
    $s=$conn->query($query);


}

*/




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
        Titre: <input type="text" name="titre" value="<?=$titre?>">
        <br> <br>
        image: <input type="file" name="image" value="<?=$image?>">
        <br>
        <br>
        <img src="<?=$image?>" width="100px" alt="">
        <br> <br>
        text: <textarea name="text" id="" cols="30" rows="10" ><?=$text?></textarea>
        <br> <br>
        dure: <input type="text" name="dure" value="<?=$dure?>">
        <br>  <br> 
        <input type="submit" value="envoyer" name="submit" style='background-color:green'>
    </form>
    
</body>
</html>
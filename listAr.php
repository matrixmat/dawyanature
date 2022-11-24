<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
   
</head>
<body>
    <div class="container">
        <h1>liste activitées</h1>
        <table class="table table-bordred table-hover table-stripped">
            <tr><th>Titre</th><th>Image</th><th>Text</th><th>Dure</th><th>Actions</th></tr>

            <?php
            include("connexion.php");
           
            $query="SELECT * FROM `modifierphp`";
            $result=$conn->query($query);
            $data=$result->fetch_all(1);

            for($i=0;$i<count($data);$i++){
               
                $id=$data[$i]["id"];
                $titre=$data[$i]["titre"];
                $image=$data[$i]["image"];
                $text=$data[$i]["text"];
                $dure=$data[$i]["dure"];
                echo "<tr> <td>$titre</td> <td> <img src='$image' width='50px' /></td><td>$text</td><td>$dure</td>";
                echo "<td>";
                echo "<a href='sup.php ?id=$id '  class='btn btn-danger'>Supprimer</a>";
                echo "<a href='modifier.php?id=$id' class='btn btn-warning'>Modifier</a>";

                echo "</tr>";






            }  







            ?>
        </table>
    </div>
</body>
</html>
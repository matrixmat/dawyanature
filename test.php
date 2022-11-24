<?php


$con = mysqli_connect("localhost", "root", "");

// // // var_dump($con);

if ($con) {
    echo "Connection avec success";
} else {
    die("connection faild" . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS login ";

// $res=mysqli_query($con,$sql);

if (mysqli_query($con, $sql)) {
    // sql to create table

    $sql = "CREATE TABLE IF NOT EXISTS login.user(
        email VARCHAR(50) NOT NULL  ,
        mot_pass VARCHAR(30) NOT NULL
        );
        ";
    mysqli_query($con, $sql) or die("<hr>couldn't creat table<hr>" . mysqli_error($con));

    mysqli_query($con, "USE login;") or die(mysqli_error($con));

    $insert = "INSERT INTO user (`email`, `mot_pass`)
    VALUES ('john@example.com', 'doe' );";
    mysqli_query($con, $insert) or die("<hr>couldn't creat record<hr>" . mysqli_error($con));
} else {
    echo "insid else";
    echo mysqli_error($con);
}

if (mysqli_query($con, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($con);
}
$password='doe';
$GoodPassword=password_hash($password,PASSWORD_DEFAULT);
if(password_verify($password,$GoodPassword)){
    echo " password is valid";
}else{
    echo "Invalid password ";
}


mysqli_close($con);


?>



// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "CREATE DATABASE login";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "base de donner a été créé avec succès<br>";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// try{
//       // sql to create table
// $table = "CREATE TABLE user (
//    email VARCHAR(50) PRIMARY KEY,
//    Mot_pass VARCHAR(30) NOT NULL
   
// )";
  
 
// --    // use exec() because no results are returned
//  $conn->exec($table);
//  echo "table'user a été créé avec succès";
// }catch(PDOException $e) {
//    echo $table . "<br>" . $e->getMessage();
//   }

// $conn = null;


    






// if(!mysql_connect('localhost','login','root'))
// {
// Echo'Connection Impossible';
// exit();
// } else{
// Echo'Connexion réussie';
// }
// Mysql_select_db('ybet');
// // cette partie ouvre la base de donnée
// $requete="CREATE TABLE if not exists contenu (code int primary key NOT NULL auto_increment,titre varchar(120) not null,description TEXT not null,photo varchar(255),ville varchar(40),pays enum('Belgique','France','Luxembourg'),prix decimal(8,2) not null,dateinsertion date,telephone varchar(15),mail varchar(30),index(ville))";
// $erreur=mysql_query($requete);
// $erreur1=mysql_error();
// print($erreur."<br>");
// print($erreur1);
// mysql_close();
// 




// $password='karima';
// $theGoodPassword=password_hash($password,PASSWORD_DEFAULT);

// // $newPass='karimaaa';

// if (password_verify($password, $theGoodPassword)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }





// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "CREATE DATABASE login";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "base de donner a été créé avec succès<br>";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// try{
//       // sql to create table
// $table = "CREATE TABLE user (
//    email VARCHAR(50) PRIMARY KEY,
//    Mot_pass VARCHAR(30) NOT NULL
   
// )";
  
 
// --    // use exec() because no results are returned
//  $conn->exec($table);
//  echo "table'user a été créé avec succès";
// }catch(PDOException $e) {
//    echo $table . "<br>" . $e->getMessage();
//   }

// $conn = null;


    






// if(!mysql_connect('localhost','login','root'))
// {
// Echo'Connection Impossible';
// exit();
// } else{
// Echo'Connexion réussie';
// }
// Mysql_select_db('ybet');
// // cette partie ouvre la base de donnée
// $requete="CREATE TABLE if not exists contenu (code int primary key NOT NULL auto_increment,titre varchar(120) not null,description TEXT not null,photo varchar(255),ville varchar(40),pays enum('Belgique','France','Luxembourg'),prix decimal(8,2) not null,dateinsertion date,telephone varchar(15),mail varchar(30),index(ville))";
// $erreur=mysql_query($requete);
// $erreur1=mysql_error();
// print($erreur."<br>");
// print($erreur1);
// mysql_close();
// 




// $password='karima';
// $theGoodPassword=password_hash($password,PASSWORD_DEFAULT);

// // $newPass='karimaaa';

// if (password_verify($password, $theGoodPassword)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
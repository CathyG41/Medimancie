<?php
if($_POST){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="contact-form";



    $conn = mysqli_connect($servername, $username, $password , $dbname);


    if (!$conn){
        var_dump($_POST);
        die("La connection à echoué:" . mysqli_connect_error());
    }


    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $sujet = $_POST["subject"];
    $message = $_POST["message"];
    



    $sql = "INSERT INTO  messages (nom, prenom, email, sujet, message) 
    VALUES ('$nom', '$prenom', '$email', '$sujet', '$message' )";


    if(mysqli_query($conn, $sql)){
       
        echo "nouvelle enregistrement crée avec succès";
       
    }else{
        echo "erreur" . $sql . "<br>" . mysqli_error($conn);
    } 
    mysqli_close($conn);




}







?>

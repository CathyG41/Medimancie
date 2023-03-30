



<?php 
include("admin/admin.haut.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact-form";


$mysqli = new Mysqli($servername, $username, $password, $dbname);
$result = $mysqli->query("SELECT * FROM messages");

echo '<table border="5" class=tableau_messages> <tr>';
// while($colonne = $result ->fetch_field())
// {
echo '<th> nom </th>';
echo '<th> prenom </th>';
echo '<th> email </th>';
echo '<th> sujet </th>';
echo '<th> message </th>';
// }
echo "</tr>";
while ($ligne = $result->fetch_assoc())
{
   
echo '<tr>';
foreach ($ligne as $indice  => $information)
{
    
    if($indice == 'Nom'){
        echo '<td>' . $information . '</td>';

    }
    if($indice == 'Prenom'){
        echo '<td>' . $information . '</td>';
    }
    if($indice == 'Email'){
        echo '<td>' . $information . '</td>';
    }
    if($indice == 'Sujet'){
        echo '<td>' . $information . '</td>';
    }
    if($indice == 'Message'){
        echo '<td>' . $information . '</td>';
    }
    

}
echo '</tr>';
}
echo '</table>';


?>



<?php include("admin/admin.bas.php");?> 


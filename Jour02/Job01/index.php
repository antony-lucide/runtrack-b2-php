<?php



function find_all_students(): array{
    $db = new PDO('mysql:host=localhost; dbname=ip_official;charset=utf8','root','');
    $requete = $db->prepare("SELECT * FROM student");
    $requete->execute([]);
    $resultat = $requete->fetchall();
    return $resultat;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02</title>
</head>
    <body>
        
<table>
    <thead>
        <td>Prenom</td>
        <td>Nom</td>
        <td>Naissance</td>
        <td>Sexe</td>
        <td>Email</td>
    </thead>
    <tbody>
        <?php
        $stockage = find_all_students();
        foreach($stockage as $student){
            foreach($student as $columns){
                echo $columns;
             }
         }
        ?>
    </tbody>
</table>
    </body>
</html>
<?php

function find_all_students() : array { // ` : array ` permet de spécifier explicitement le type de données que la fonction doit renvoyer. Ici un tableau.
    $db = new PDO('mysql:host=localhost;dbname=lp_official;port=3308','root', '');
    
    $selectStudentQuery = "SELECT * FROM `student`";
    $stmt = $db->prepare($selectStudentQuery);
    $stmt->execute();

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $students;
}

var_dump(find_all_students());
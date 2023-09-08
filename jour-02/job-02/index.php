<?php

function find_one_student(string $email) : array { 
    $db = new PDO('mysql:host=localhost;dbname=lp_official;port=3308','root', '');
    
    $selectStudentQuery = "SELECT * FROM `student` WHERE `email` = :email";
    $stmt = $db->prepare($selectStudentQuery);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $students;
}

if (isset($_POST['submit'])) {
    $email = $_POST['input-email-student'];
    var_dump(find_one_student($email));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="input-email-student">
        <input type="submit" name="submit">
    </form>
</body>
</html>
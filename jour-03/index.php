<?php
require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';

$student = new Student();
$student->print_student_info();
echo "<br>";

$anotherstudent = new Student(2, 2, "augustin@gmail.com", "Augustin Yvon", new Datetime("2004-07-16"), "male");
$anotherstudent->print_student_info();
echo "<br>";

echo "<br>";
echo $student->getId() . " | ";
echo $student->setId(8) . " | ";
echo $student->getId() . " | ";
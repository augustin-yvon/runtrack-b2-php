<?php
require_once 'class/Student.php';
require_once 'class/Grade.php';

$student = new Student();
$student->print_student_info();

$anotherstudent = new Student(2, 2, "augustin@gmail.com", "Augustin Yvon", new Datetime("2004-07-16"), "male");
$anotherstudent->print_student_info();

$grade = new Grade();
$grade->print_grade_info();

$anothergrade = new Grade(2, 5, "Bachelor 2 Web", new DateTime("2022-01-09"));
$anothergrade->print_grade_info();
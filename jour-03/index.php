<?php
require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';

$student = new Student();
$student->printStudentInfo();
echo "<br>";

$anotherstudent = new Student(2, 2, "augustin@gmail.com", "Augustin Yvon", new Datetime("2004-07-16"), "male");
$anotherstudent->printStudentInfo();
echo "<br>";

echo "<br>";
echo $student->getId() . " | ";
echo $student->setId(8);
echo $student->getId() . " | ";
echo "<br>";

echo "<br>";
$student->findOneStudent(1)->printStudentInfo();
echo "<br>";

echo "<br>";
$grade = new Grade();
$grade->findOneGrade(1)->printGradeInfo();
echo "<br>";

echo "<br>";
$room = new Room();
$room->findOneRoom(1)->printRoomInfo();
echo "<br>";

echo "<br>";
$floor = new Floor();
$floor->findOneFloor(1)->printFloorInfo();
echo "<br>";
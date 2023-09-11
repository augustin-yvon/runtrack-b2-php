<?php
class Grade {
    private int $id;
    private int $room_id;
    private string $name;
    private $year;

    public function __construct(
        int $id = 1,
        int $room_id = 8,
        string $name = 'Bachelor 1',
        $year = null
    ) {
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        
        if ($year === null) {
            $this->year = new DateTime("2023-01-09");
        } else {
            $this->year = $year;
        }
    }

    public function printGradeInfo() {
        foreach ([$this->id, $this->room_id, $this->name, $this->year] as $info) {
            if ($info === $this->year) {
                echo $info->format('Y-m-d') . ' | ';
            } else {
                echo $info . ' | ';
            }
        }
    }

    // Getter/Setter

    public function getId() { return $this->id; }
    public function setId($new_id) { $this->id = $new_id; }

    public function getRoomId() { return $this->room_id; }
    public function setRoomId($new_room_id) { $this->room_id = $new_room_id; }

    public function getName() { return $this->name; }
    public function setName($new_name) { $this->name = $new_name; }

    public function getYear() { return $this->year; }
    public function setYear($new_year) { $this->year = $new_year; }

    public function findOneGrade(int $id) {
        $db = new PDO('mysql:host=localhost;dbname=lp_official;port=3308','root', '');
    
        $selectStudentQuery = "SELECT * FROM `grade` where `id` = :id";
        $stmt = $db->prepare($selectStudentQuery);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $students = $stmt->fetch(PDO::FETCH_ASSOC);

        $result = new Grade($students['id'], $students['room_id'], $students['name'], new Datetime($students['year']));

        return $result;
    }
}
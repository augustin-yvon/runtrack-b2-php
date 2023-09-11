<?php
class Floor {
    private int $id;
    private string $name;
    private int $level;

    public function __construct(
        int $id = 1,
        string $name = 'Rez-de-chaussée',
        int $level = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    public function printFloorInfo() {
        foreach ([$this->id, $this->name, $this->level] as $info) {
            echo $info . ' | ';
        }
    }

    // Getter/Setter
    public function getId() { return $this->id; }
    public function setId($new_id) { $this->id = $new_id; }

    public function getName() { return $this->name; }
    public function setName($new_name) { $this->name = $new_name; }

    public function getCapacity() { return $this->level; }
    public function setCapacity($new_level) { $this->level = $new_level; }

    public function findOneFloor(int $id) {
        $db = new PDO('mysql:host=localhost;dbname=lp_official;port=3308','root', '');
    
        $selectStudentQuery = "SELECT * FROM `floor` where `id` = :id";
        $stmt = $db->prepare($selectStudentQuery);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $students = $stmt->fetch(PDO::FETCH_ASSOC);

        $result = new Floor($students['id'], $students['name'], $students['level']);

        return $result;
    }
}
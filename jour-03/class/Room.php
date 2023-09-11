<?php
class Room {
    private int $id;
    private int $floor_id;
    private string $name;
    private int $capacity;

    public function __construct(
        int $id = 1,
        int $floor_id = 1,
        string $name = 'RDC Food an Drinks',
        int $capacity = 90
    ) {
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    public function printRoomInfo() {
        foreach ([$this->id, $this->floor_id, $this->name, $this->capacity] as $info) {
            echo $info . ' | ';
        }
    }

    // Getter/Setter

    public function getId() { return $this->id; }
    public function setId($new_id) { $this->id = $new_id; }

    public function getFloorId() { return $this->floor_id; }
    public function setFloorId($new_floor_id) { $this->floor_id = $new_floor_id; }

    public function getName() { return $this->name; }
    public function setName($new_name) { $this->name = $new_name; }

    public function getCapacity() { return $this->capacity; }
    public function setCapacity($new_capacity) { $this->capacity = $new_capacity; }

    public function findOneRoom(int $id) {
        $db = new PDO('mysql:host=localhost;dbname=lp_official;port=3308','root', '');
    
        $selectStudentQuery = "SELECT * FROM `room` where `id` = :id";
        $stmt = $db->prepare($selectStudentQuery);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $students = $stmt->fetch(PDO::FETCH_ASSOC);

        $result = new Room($students['id'], $students['floor_id'], $students['name'], $students['capacity']);

        return $result;
    }
}
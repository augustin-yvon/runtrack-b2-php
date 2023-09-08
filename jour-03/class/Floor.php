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

    public function print_room_info() {
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
}
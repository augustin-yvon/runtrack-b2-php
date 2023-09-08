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

    public function print_grade_info() {
        foreach ([$this->id, $this->room_id, $this->name, $this->year] as $info) {
            if ($info === $this->year) {
                echo $info->format('Y-m-d') . "<br>";
            } else {
                echo $info . '<br>';
            }
        }
    }
}
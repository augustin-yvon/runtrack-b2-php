<?php

class Student {
    private int $id;
    private int $grade_id;
    private string $email;
    private string $fullname;
    private $birthday;
    private string $gender;

    public function __construct(
        int $id = 1,
        int $grade_id = 1,
        string $email = 'student@email.com',
        string $fullname = 'Terry Cristinelli',
        $birthday = null, // On ne peut pas utliser l'objet Datetime directement ici
        string $gender = 'male'
    ) {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        
        if ($birthday === null) {
            $this->birthday = new DateTime("1990-01-18");
        } else {
            $this->birthday = $birthday;
        }
        
        $this->gender = $gender;
    }

    public function print_student_info() {
        foreach ([$this->id, $this->grade_id, $this->email, $this->fullname, $this->birthday, $this->gender] as $info) {
            if ($info === $this->birthday) {
                echo $info->format('Y-m-d') . "<br>";
            } else {
                echo $info . '<br>';
            }
        }
    }
}
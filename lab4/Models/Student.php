<?php

namespace models;

class Student extends Human {
    private $universityName;
    private $course;

    public function __construct($height, $weight, $age, $universityName, $course) {
        parent::__construct($height, $weight, $age);
        $this->universityName = $universityName;
        $this->course = $course;
    }
    public function getUniversityName() {
        return $this->universityName;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setUniversityName($universityName) {
        $this->universityName = $universityName;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function moveOnToNextCourse() {
        $this->course++;
    }

    protected function birthMessage() {
        return "Студент народився:  $this->universityName, курс $this->course!";
    }

    public function cleanRoom() {
        echo "Студент прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "Студент прибирає кухню\n";
    }
    

}

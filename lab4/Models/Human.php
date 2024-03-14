<?php
namespace models;

abstract class Human implements HouseCleaning {
    private $height;
    private $weight;
    private $age;

    protected abstract function birthMessage();

    public function giveBirth() {
        $message = $this->birthMessage();
        echo $message . "\n";
    }

    public function __construct($height, $weight, $age) {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    public function cleanRoom() {
        echo get_class($this) . " прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo get_class($this) . " прибирає кухню\n";
    }
    
    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getAge() {
        return $this->age;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}



class Programmer extends Human {
    private $programmingLanguages = [];
    private $experience;

    public function __construct($height, $weight, $age, $programmingLanguages, $experience) {
        parent::__construct($height, $weight, $age);
        $this->programmingLanguages = $programmingLanguages;
        $this->experience = $experience;
    }

    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setProgrammingLanguages($programmingLanguages) {
        $this->programmingLanguages = $programmingLanguages;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    public function addProgrammingLanguage($newLanguage) {
        $this->programmingLanguages[] = $newLanguage;
    }

    protected function birthMessage() {
        return "Програміст народився!!! Знає такі мови : " . implode(", ", $this->programmingLanguages) . "!";
    }

    public function cleanRoom() {
        echo "Програміст прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "Програміст прибирає кухню\n";
    }
    
}



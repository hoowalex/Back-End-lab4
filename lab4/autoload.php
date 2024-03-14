<?php
use views\UserView as UserView;
use models\Circle as Circle;
use controllers\TextController as TextController;
use models\Human as Human;
use models\Student as Student;
use models\Programmer as Programmer;



function autoload($class){
    $path = str_replace('\\','/',$class).'.php';
    if(is_file($path)){
        include_once($path);
    }
  
}

spl_autoload_register("autoload");

$obj = new UserView();
$obj->WriteHello();
echo '<br/>';

$obj2 = new Circle(1,2,3);
echo $obj2->__toString();
echo '<br/>';

$obj3 = new TextController();
$obj3->writeDataToFile('file1.txt','some text');
print_r($obj3->readDataFromFile('file1.txt'));

echo '<br/>';
echo '<br/>';
$student = new Student(156, 40, 11, "Uuu1", 1);
$programmer = new Programmer(186, 60, 45, ["Python", "Dart"], 2);

echo "Університет студента : " . $student->getUniversityName() . ", Курс : " . $student->getCourse() . "\n";
echo "Мови програміста : " . implode(", ", $programmer->getProgrammingLanguages()) . ", Досвід : " . $programmer->getExperience() . " years\n";
echo '<br/>';
$student->setUniversityName("Uuu2");
$student->moveOnToNextCourse();
$programmer->addProgrammingLanguage("C#");
echo '<br/>';
echo "Університет студента : " . $student->getUniversityName() . ", Курс : " . $student->getCourse() . "\n";
echo '<br/>';
echo "Мови програаміста : " . implode(", ", $programmer->getProgrammingLanguages()) . ", Досвід : " . $programmer->getExperience() . " years\n";
echo '<br/>';

echo $student->giveBirth();
echo $programmer->giveBirth();
echo '<br/>';
$student->cleanRoom();
$student->cleanKitchen();
echo '<br/>';
$programmer->cleanRoom();
$programmer->cleanKitchen();


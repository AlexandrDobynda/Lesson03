<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 02.10.2018
 * Time: 15:22
 */
namespace lesson03;

require_once ('Human.php');
require_once ('Student.php');
require_once ('Employee.php');
require_once ('Manager.php');

// ------------------------------------------
// TESTING

//-------------------------------------------



$human1 = new Human('Petr', 'Borovskiy', 50);
echo 'Human: ' . $human1 . '<br>';

$student1 = new Student('Alexandr', 'Dobynda', 2, 26);
$student1->setZaochnoe();
$student1->giveMark(5);
$student1->giveMark(2);
$student1->giveMark(3);
$student1->giveMark(4);


echo 'Student: ' . $student1 . '<br>';

echo $student1->getType() . '<br>';
echo 'course: ' . $student1->getCourse(). '<br>';
$student1->showMarks();



$employee1 = new Employee('Sergey','Sidorov', 2500);
$employee2 = new Employee('Petr','Petrov', 10000);
$employee3 = new Employee('Grigoriy','Elkin', 4444);

$employee1->setFirstName('Egor');
$employee1->giveSalary('25-april-1992', 2000);
$employee1->giveSalary('25-april-1993', 2200);
$employee1->giveSalary('25-april-1994');

$employee2->giveSalary('25-april-1992', 3000);
$employee2->giveSalary('25-april-1993', 9999);
$employee2->giveSalary('25-april-1994');

$employee1->showWageList();
$employee2->showWageList();



$manager1 = new Manager('Egor','Nikolenko');
echo $manager1->getFullName()  . '<br>';
$manager1->addEmployee($employee1);
$manager1->addEmployee($employee2);
$manager1->addEmployee($employee3);


$manager1->showEmployeesList();
$manager1->removeEmployee('Petrov');
$manager1->showEmployeesList();


echo "Counters: <br>";
echo $human1->getCountMessage();
echo $student1->getCountMessage();
echo $employee1->getCountMessage();
echo $manager1->getCountMessage();


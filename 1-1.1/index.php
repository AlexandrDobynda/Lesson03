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
echo 'Human: ' . $human1->getFullName() . '<br>';

$student1 = new Student('Alexandr', 'Dobynda', 26);
$student1->setZaochnoe(2);
$student1->giveMark(5);
$student1->giveMark(2);
$student1->giveMark(3);
$student1->giveMark(4);


echo 'Student: ' . $student1->getFullName() . '<br>';
echo 'age: ' . $student1->age . '<br>';
echo $student1->getType() . '<br>';
echo 'course: ' . $student1->getCourse(). '<br>';
$student1->getMarks();



$employee1 = new Employee('Sidorov', 2500);
$employee2 = new Employee('Petrov', 10000);
$employee3 = new Employee('Elkin', 4444);

$employee1->setFirstName('Egor');
$employee1->giveSalary('25-april-1992', 2000);
$employee1->giveSalary('25-april-1993', 2200);
$employee1->giveSalary('25-april-1994');

$employee2->giveSalary('25-april-1992', 3000);
$employee2->giveSalary('25-april-1993', 9999);
$employee2->giveSalary('25-april-1994');

$employee1->checkWageList();
$employee2->checkWageList();



$manager1 = new Manager('Nikolenko');
echo $manager1->getFullName()  . '<br>';
$manager1->addEmployee($employee1);
$manager1->addEmployee($employee2);
$manager1->addEmployee($employee3);


$manager1->checkEmployeesList();
$manager1->removeEmployee('Petrov');
$manager1->checkEmployeesList();


echo "Counters: <br>";
$human1->count();
$student1->count();
$employee1->count();
$manager1->count();


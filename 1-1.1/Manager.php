<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 02.10.2018
 * Time: 15:50
 */

namespace lesson03;
/**
 * Class Manager
 * @package lesson03
 */

class Manager extends Employee
{

    protected static $count = 0;
    protected static $onlyEmployeeCount = 0;
    /**
     * @var array of obj::Employee
     */
    private $listOfEmloyees = [];

    /**
     * Manager constructor.
     * @param string $lastName
     * @param string $firstName
     */
    public function __construct(string $firstName,string $lastName)
    {
        static::$onlyEmployeeCount++;
        self::$count++;

        parent::__construct($firstName, $lastName);
    }

    /**
     * @param object $employeeId
     *
     */
    public function addEmployee(object $employeeId)
    {

        $this->listOfEmloyees[$employeeId->getLastName()] = $employeeId;
    }

    public function removeEmployee(string $lastName)
    {
        unset($this->listOfEmloyees[$lastName]);
    }


    public function showEmployeesList()
    {
        echo "Employees list of  " . $this->getFullName() . ': <br>';

        foreach ($this->listOfEmloyees as $key => $value)
        {
            echo  $value . '<br>';
        }

        echo  '<br>';
    }

    /**
     * @return string
     */
    public function getCountMessage()
    {
        return 'Manager count: ' . self::$count . '<br>' .
         'Manager count/all employee: ' . self::$count . '/' . parent::$count  .  '<br>';
    }


}
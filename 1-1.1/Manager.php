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
     * @var array
     */
    private $listOfEmloyees = [];

    /**
     * Manager constructor.
     * @param string $lastName
     */
    public function __construct( $lastName)
    {
        static::$onlyEmployeeCount++;
        self::$count++;

        parent::__construct($lastName);
    }

    /**
     * @param object $employeeId
     *
     */
    public function addEmployee($employeeId)
    {

        $this->listOfEmloyees[$employeeId->lastName] = $employeeId;
    }

    public function removeEmployee($lastName)
    {
        unset($this->listOfEmloyees[$lastName]);
    }


    public function checkEmployeesList()
    {
        echo "Employees list of  " . $this->getFullName() . ': <br>';

        foreach ($this->listOfEmloyees as $key => $value)
        {
            echo  $value . '<br>';
        }

        echo  '<br>';
    }

    public function count()
    {
        echo 'Manager count: ' . self::$count . '<br>';
        echo 'Manager count/all employee: ' . self::$count . '/' . parent::$count  .  '<br>';
    }


}
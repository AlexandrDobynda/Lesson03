<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 02.10.2018
 * Time: 15:44
 */

namespace lesson03;


class Employee extends Human
{
    protected static $count = 0;
    protected static $onlyEmployeeCount = 0;

    private $salary;
    private $wageList = [];

    public function __construct($lastName, $salary = false)
    {
        self::$count++;
        static::$onlyEmployeeCount++;

        parent::__construct('', $lastName);
        $this->salary = $salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function giveSalary($date, $value = false)
    {
        if ($value)
        {
            $this->wageList[$date] = $value;
        } else
        {
            $this->wageList[$date] = $this->salary;
        }

    }

    public function checkWageList()
    {
        echo "Wage list of " . $this->getFullName() . ': <br>';

        foreach ($this->wageList as $key => $value)
        {
            echo $key . ': ' . $value . ' money<br>';
        }
        echo '<br>';
    }

    public function __toString()
    {
        return $this->getFullName() . '. Salary: ' . $this->salary;
    }

    public function count()
    {
        echo 'Employee count: ' . self::$onlyEmployeeCount . '<br>';
        echo 'Employee count/all human: ' . self::$onlyEmployeeCount . '/' . parent::$count  .  '<br>';
        echo 'Employee count/all employee: ' . self::$onlyEmployeeCount . '/' . self::$count  .  '<br>';
    }
}
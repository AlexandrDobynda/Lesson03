<?php


namespace lesson03;
/**
 * Class Employee
 * @package lesson03
 */

class Employee extends Human
{
    protected static $count = 0;
    protected static $onlyEmployeeCount = 0;

    /**
     * @var int $salary
     * @var array $wageList
     */
    private $salary;
    private $wageList = [];

    /**
     * Employee constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $salary
     *
     */
    public function __construct(string $firstName,string $lastName,int $salary = null)
    {
        self::$count++;
        static::$onlyEmployeeCount++;

        parent::__construct($firstName, $lastName);
        $this->salary = $salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param string $date
     * @param int $value
     */
    public function giveSalary(string $date, int $value = null)
    {
        if ($value)
        {
            $this->wageList[$date] = $value;
        } else
        {
            $this->wageList[$date] = $this->salary;
        }

    }


    public function showWageList()
    {
        echo "Wage list of " . $this->getFullName() . ': <br>';

        foreach ($this->wageList as $key => $value)
        {
            echo $key . ': ' . $value . ' money<br>';
        }
        echo '<br>';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFullName() . '. Salary: ' . $this->salary;
    }

    public function getCountMessage()
    {
        return 'Employee count: ' . self::$onlyEmployeeCount . '<br>' .
         'Employee count/all human: ' . self::$onlyEmployeeCount . '/' . parent::$count  .  '<br>' .
         'Employee count/all employee: ' . self::$onlyEmployeeCount . '/' . self::$count  .  '<br>';
    }
}
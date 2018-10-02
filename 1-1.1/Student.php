<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 02.10.2018
 * Time: 15:42
 */

namespace lesson03;


/**
 * Class Student
 */
class Student extends Human
{

    protected static $count = 0;

    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;

    private $type = self::TYPE_OCHN;
    private $course = 1;
    private $marks = [];
// ______________________________________

    /**
     * Student constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     */
    public function __construct ($firstName = '', $lastName = '', $age = '')
    {
        self::$count++;

        parent::__construct($firstName, $lastName, $age);
    }

    /**
     * @param int $course
     */
    public function setOchnoe($course = false)
    {
        $course ? $this->course = $course : $this->course;
        $this->type = self::TYPE_OCHN;
    }
    public function setZaochnoe($course = false)
    {
        $course ? $this->course = $course : $this->course;
        $this->type = self::TYPE_ZAOCHN;
    }

    public function getType()
    {
        return $this->type == 1 ? 'Ochnoe' : 'Zaochnoe';
    }

    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param int $value
     * @return array
     */
    public function giveMark($value):array
    {
        array_push($this->marks, $value);
    }


    public function getMarks()
    {
        echo "Marks of " . $this->getFullName() . ': <br>';

        foreach ($this->marks as $value)
        {
            echo  $value . ', ';
        }

        echo '<br><br>';
    }

    public function count()
    {
        echo 'Student count: ' . self::$count . '<br>';
        echo 'Student count/all human: ' . self::$count . '/' . parent::$count  .  '<br>';
    }
}
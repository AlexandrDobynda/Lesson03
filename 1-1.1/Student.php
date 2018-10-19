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
     * @param int $course
     */
    public function __construct (string $firstName, string $lastName, int $course, int $age = null)
    {
        self::$count++;

        $this->course = $course;

        parent::__construct($firstName, $lastName, $age);
    }

    /**
     * @param int $course
     */
    public function setOchnoe(int $course = null)
    {
        if ($course) {
            $this->course = $course;
        }
        $this->type = self::TYPE_OCHN;
    }
    public function setZaochnoe(int $course = null)
    {
        if ($course) {
            $this->course = $course;
        }
        $this->type = self::TYPE_ZAOCHN;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type == 1 ? 'Ochnoe' : 'Zaochnoe';
    }

    /**
     * @return int
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param int $value
     */
    public function giveMark(int $value)
    {
        array_push($this->marks, $value);
    }

    public function showMarks()
    {
        echo "Marks of " . $this->getFullName() . ': <br>';

        foreach ($this->marks as $value)
        {
            echo  $value . ', ';
        }

        echo '<br><br>';
    }

    public function getCountMessage()
    {
        return 'Student count: ' . self::$count . '<br>' .
         'Student count/all human: ' . self::$count . '/' . parent::$count  .  '<br>';
    }
}
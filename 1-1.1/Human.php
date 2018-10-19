<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 02.10.2018
 * Time: 15:36
 */

namespace lesson03;

/**
 * Class Human
 */
class Human
{



    protected static $count = 0;
    private $firstName;
    private $lastName;
    private $age;

    /**
     * Human constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     */
    public function __construct (string $firstName, string $lastName, $age = null)
    {
        self::$count++;

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
//===========================
    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFullName() . ', age: ' . $this->age;
    }



    /**
     * @return string
     */
    public function getCountMessage()
    {
        return 'Human count: ' . self::$count . '<br>';
    }}
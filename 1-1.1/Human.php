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
     * @param int|string $age
     */
    public function __construct ($firstName = '', $lastName = '', $age = '')
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
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    // ===========================

    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }


    public function count()
    {
        echo 'Human count: ' . self::$count . '<br>';
    }}
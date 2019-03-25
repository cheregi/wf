<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/25/2019
 * Time: 10:40 AM
 */

namespace Model;
class Person
{
    private $id;
    protected $firstname;
    protected $lastname;
    protected $emails = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }


    /**
     * @param array $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }


}
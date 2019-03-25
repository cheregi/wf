<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/25/2019
 * Time: 10:41 AM
 */

namespace Model;
class User
{

    private $id;
    protected $roles = [];
    protected $password;
    protected $salt;
    protected $username;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;

    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;

    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;

    }

    public function eraseCredentials(){
        $this->salt= null;
        $this->password=null;

        //or
//        $this->setPassword(null);
//        $this->setSalt(null);
    }

}
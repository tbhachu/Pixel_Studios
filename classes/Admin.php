<?php


class Admin extends Customer
{

    private $_username;
    private $_password;

    /**
     * default constructor with default values ( ="" )
     */
    public function __construct($fname="", $lname="", $phone="", $email="", $address="", $state="", $username="", $password="" )
    {
        //call Member constructor
        parent::__construct($fname, $lname, $phone, $email, $address, $state);


        $this->_username = $username;
        $this->_password = $password;

    }

    /**
     * return username
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * set first name
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * return password
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * set password
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }










}
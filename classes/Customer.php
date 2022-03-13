<?php


class Customer
{
    //classes and functions go on different lines, decisions and loops, {} same line
    private $_sessionID;
    private $_fname;
    private $_lname;
    private $_phone;
    private $_email;
    private $_address;
    private $_state;



    /**
     * default constructor with default values ( ="" )
     */
    public function __construct($sessionID=0, $fname="", $lname="", $phone="", $email="", $address="", $state="")
    {
        $this->_sessionID = $sessionID;
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_address = $address;
        $this->_state = $state;
    }

    /**
     * return session id
     * @return integer
     */
    public function getSessionID()
    {
        return $this->_sessionID;
    }

    /**
     * set session ID
     * @param integer $sessionID
     */
    public function setSessionID(int $sessionID)
    {
        $this->_sessionID = $sessionID;
    }


    /**
     * return first name
     * @return string
     */
    public function getFirstName()
    {
        return $this->_fname;
    }

    /**
     * set first name
     * @param string $fname
     */
    public function setFirstName($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * return last name
     * @return string
     */
    public function getLastName()
    {
        return $this->_lname;
    }

    /**
     * set last name
     * @param string $lname
     */
    public function setLastName($lname)
    {
        $this->_lname = $lname;
    }


    /**
     * return phone number
     * @return string
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * set phone number
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * return email
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * set email
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * return state
     * @return string
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * set state
     * @param string $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }


    /**
     * return bio
     * @return string
     */
    public function getAddress()
    {
        return $this->_address;
    }

    /**
     * set bio
     * @param string $address
     */
    public function setBio($address)
    {
        $this->_address = $address;
    }





}
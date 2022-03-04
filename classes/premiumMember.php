<?php


class PremiumMember extends Member
{

    private $_inDoorInterests;
    private $_outDoorInterests;

    /**
     * default constructor with default values ( ="" )
     */
    public function __construct($fname="", $lname="", $age="", $coat="", $phone="", $inDoorInterests=[""], $outDoorInterests=[""])
    {
        //call Member constructor
        parent::__construct($fname, $lname, $age, $coat, $phone);

        /*foreach($inDoorInterests as $value)
        {
            array_push($this->_inDoorInterests, $value);
        }

        foreach($outDoorInterests as $value)
        {
            array_push($this->_outDoorInterests, $value);
        }*/

        $this->_inDoorInterests = $inDoorInterests;
        $this->_outDoorInterests = $outDoorInterests;

    }

    /**
     * return inDoorInterests
     * @return array
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /**
     * set inDoorInterests
     * @param array $inDoorInterests
     */
    public function setInDoorInterests($inDoorInterests)
    {
        foreach($inDoorInterests as $value)
        {
            array_push($this->_inDoorInterests, $value);
        }
    }

    /**
     * return outDoorInterests
     * @return array
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }

    /**
     * set outDoorInterests
     * @param array $outDoorInterests
     */
    public function setOutDoorInterests($outDoorInterests)
    {
        foreach($outDoorInterests as $value)
        {
            array_push($this->_outDoorInterests, $value);
        }
    }










}
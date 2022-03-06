<?php


class Item
{

    private $_title;
    private $_size;
    private $_frame;
    private $_finish;
    private $_price;


    /**
     * default constructor with default values ( ="" )
     */
    public function __construct($title="", $size="", $frame="", $finish="", $price=0)
    {
        $this->_title = $title;
        $this->_size = $size;
        $this->_frame = $frame;
        $this->_finish = $finish;
        $this->_price = $price;

    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->_size = $size;
    }

    /**
     * @return string
     */
    public function getFrame()
    {
        return $this->_frame;
    }

    /**
     * @param string $frame
     */
    public function setFrame($frame)
    {
        $this->_frame = $frame;
    }

    /**
     * @return string
     */
    public function getFinish()
    {
        return $this->_finish;
    }

    /**
     * @param string $finish
     */
    public function setFinish($finish)
    {
        $this->_finish = $finish;
    }

    /**
     * @return double
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param double $price
     */
    public function setPrice($price)
    {
        $this->_price = $price;
    }














}
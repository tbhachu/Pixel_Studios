<?php



class DataLayer
{
    // Add a field to store database connection object
    private $_dbh;

    /**
     * Return an array of frame sizes
     * @return string[]
     */
    static function getSizes()
    {
        return array('small', 'medium', 'large', 'x-large');
    }

    /**
     * Return an array of frame styles
     * @return string[]
     */
    static function getFrames()
    {
        return array('black', 'wood', 'white', 'gold', 'walnut', 'coffee', 'silver');
    }

    /**
     * Return an array of image address's
     * @return string[]
     */
    static function getImages()
    {
        return array('images/LONG_EXP_CAR.jpg', 'images/dundee graffiti.jpeg', 'images/parismotorbike.jpeg');
    }

    /**
     * Return an array of image titles
     * @return string[]
     */
    static function getTitles()
    {
        return array('Car', 'Graffiti', 'Motorcycle');
    }

    /**
     * Return an array of image descriptions
     * @return string[]
     */
    static function getInfo()
    {
        return array('F/22 | 25s EXP | ISO-140', 'F/9 | 1/80s EXP | ISO-320', 'F/4 | 1/160s EXP | ISO-6400');
    }

    /**
     * Return an array of image prices
     * @return string[]
     */
    static function getPrice()
    {
        return array('19.99', '29.99', '49.99','64.99');
    }

}
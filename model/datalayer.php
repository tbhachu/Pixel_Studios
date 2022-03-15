<?php

//Require the database credentials
require_once $_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php';

/**
 * Class DataLayer accesses data needed for the Pixel Studios
 */
class DataLayer
{
    // Add a field to store database connection object
    private $_dbh;

    //Define a default constructor
    function __construct()
    {
        try {
            //Instantiate a PDO database object
            $this->_dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "Connection Succesful";
        }
        catch (PDOException $e) {
            echo "Error connecting to DB " . $e->getMessage();
        }
    }

    function getProducts()
    {
        //1. Define the query
        $sql = "SELECT * FROM Products";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the query
        $statement->execute();

        //5. Process the results (get the primary key)
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * saveOrder accepts an Order object and inserts it into the DB
     * @param $item An Order object
     * @return string The order_id of the inserted row
     */
    function insertItem($item, $customer)
    {
        //1. Define the query
        $sql = "INSERT INTO ShoppingCart (sessionID, title, size, frame, finish, price)
                VALUES (:sessionID, :title, :size, :frame, :finish, :price)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':sessionID', $customer->getSessionID());
        $statement->bindParam(':title', $item->getTitle());
        $statement->bindParam(':size', $item->getSize());
        $statement->bindParam(':frame', $item->getFrame());
        $statement->bindParam(':finish', $item->getFinish());
        $statement->bindParam(':price', $item->getPrice());

        //4. Execute the query
        $statement->execute();

        //5. Process the results (get the primary key)
        $id = $this->_dbh->lastInsertId();
        return $id;

    }

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
     * Return an array of finish types
     * @return string[]
     */
    static function getFinishes()
    {
        return array('matte', 'gloss', 'canvas');
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
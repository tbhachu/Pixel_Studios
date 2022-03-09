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
            echo "Connection Succesful";
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
     * @return array[] this will eventually be replaced with database grabs
     */
    static function getProductDetails()
    {
        return array (
            array (self::getImages()[0], self::getTitles()[0], self::getInfo()[0]),
            array (self::getImages()[1], self::getTitles()[1], self::getInfo()[1]),
            array (self::getImages()[2], self::getTitles()[2], self::getInfo()[2])
        );
    }

    /**
     * Return an array of image prices
     * @return string[]
     */
    static function getPrice()
    {
        return array('19.99', '29.99', '49.99','64.99');
    }

    static function product_card ($link, $title, $info)
    {
        echo "<div class='col-sm-4'>
                <div class='mb-3'>
                    <div class='card-body p-2'>
                        <img class='card-img-top' src='$link' alt=''$title'>
                        <h3 class='productTitle mt-2'>'$title'</h3>
                        <p class='lead productDescription'>$info</p>
                        <p class='text-right'>
                            <button class='btn btn-success' id='product' type='submit'>
                                Add to Cart</button>
                        </p>
                    </div>
                </div>
            </div>";
    }

    static function output_product_card()
    {
        self::product_card(self::getImages()[0], self::getTitles()[0], self::getInfo()[0]);
        self::product_card(self::getImages()[1], self::getTitles()[1], self::getInfo()[1]);
        self::product_card(self::getImages()[2], self::getTitles()[2], self::getInfo()[2]);
    }


}
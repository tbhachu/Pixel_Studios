<?php



class DataLayer
{
    // Add a field to store database connection object
    private $_dbh;

    static function getCondiments()
    {
        return array('mayonnaise', 'mustard', 'ketchup', 'salsa', 'kim chi', 'sriracha');
    }

    static function getMeals()
    {
        return array('breakfast', 'lunch', 'dinner');
    }

}
<?php

// 328/Pixel_Studios/model/validator
class Validator
{


    static function validSizes($userSize)
    {
        //Store the valid sizes
        $sizes = DataLayer::getSizes();

        //Check selected
        if (!in_array($userSize, $sizes)) {
                return false;
        }

        return true;
    }

    static function validFrames($userFrame)
    {
        //Store the valid frames
        $frames = DataLayer::getFrames();

        //Check selected
        if (!in_array($userFrame, $frames)) {
            return false;
        }
        return true;
    }

    static function validFinishes($userFinish)
    {
        //Store the valid finishes
        $frames = DataLayer::getFinishes();

        //Check selected
        if (!in_array($userFinish, $frames)) {
            return false;
        }
        return true;
    }

    /**
     * Return an price based on options
     * @return double
     */
    static function getPrice($size, $frame, $finish)
    {

        //size
        if($size == "small") {
            $price = 29.99;
        }
        else if ($size == "medium") {
            $price = 39.99;
        }
        else if ($size == "large") {
            $price = 49.99;
        }
        else{
            $price = 54.99;
        }

        //frame
        if($frame == "gold" || $frame == "silver") {
            $price += 10.00;
        }

        //finish
        if($finish == "canvas") {
            $price += 10.00;
        }

        return $price;
    }

    /**
     * Validates the first name of user
     * @param $fname
     * @return bool|mixed
     */
    static function validFName($fname)
    {
        if(strlen($fname) >= 3 && ctype_alnum($fname)) {
            return $fname;
        }
        return true;
    }

    /**
     * Validates the last name of user
     * @param $lname
     * @return bool|mixed
     */
    static function validLName($lname)
    {
        if(strlen($lname) >= 3 && ctype_alnum($lname)) {
            return $lname;
        }
        return true;
    }

    /**
     * Validates user's phone number. Returns false otherwise
     * @param $phone
     * @return false|int
     */
    static function validPhone($phone)
    {
        $phone = str_replace([' ', '.', '-', '(', ')'], '', $phone);
        return preg_match('/^[+]?[(]?[0-9]{3}[)]?[-\s]?[0-9]{3}[-\s]?[0-9]{4,6}$/', $phone);

    }

    static function validEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return $email;
        }

    }





}
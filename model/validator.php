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



}
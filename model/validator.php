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



}
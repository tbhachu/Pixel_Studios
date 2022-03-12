<?php

// 328/Pixel_Studios/model/validator
class Validator
{


    static function validSizes($userSize)
    {
        //Store the valid condiments
        $sizes = getSizes();

        //Check each selected condiment
        foreach ($userSize as $selection) {
            if (!in_array($selection, $sizes)) {
                return false;
            }
        }
        return true;
    }

    static function validFrames($userFrame)
    {
        //Store the valid condiments
        $frames = getFrames();

        //Check each selected condiment
        foreach ($userFrame as $selection) {
            if (!in_array($selection, $frames)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param $userConds
     * @return bool
     */
    static function validOutdoor($userConds)
    {
        //Store the valid interests
        $outdoor = DataLayer::getOutdoor();

        //Check each selected interest
        foreach ($userConds as $selection) {
            if (!in_array($selection, $outdoor)) {
                return false;
            }
        }
        return true;
    }

}
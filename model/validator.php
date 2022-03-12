<?php

// 328/Pixel_Studios/model/validator
class Validator
{


    static function validCondiments($userConds)
    {
        //Store the valid condiments
        $condiments = getCondiments();

        //Check each selected condiment
        foreach ($userConds as $selection) {
            if (!in_array($selection, $condiments)) {
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
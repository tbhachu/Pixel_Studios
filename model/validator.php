<?php

// 328/my-diner/model/validator.php
class Validator
{


    static function validFood($food)
    {
        return strlen($food) >= 3;
    }

    static function validMeal($meal)
    {
        return in_array($meal, getMeals());
    }

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

}
<?php
use PhpUnitConversion\Unit\Mass;

if (!function_exists('random_code')){

    function kiloGramToGram($kiloGram){
        $kiloGram = new Mass\KiloGram($kiloGram);
        $gram = new Mass\Gram;
        return $kiloGram->to($gram);
    }

    function gramToKiloGram($gram){
        $gram = new Mass\Gram($gram);
        $kiloGram = new Mass\KiloGram;
        return $gram->to($kiloGram);
    }
}

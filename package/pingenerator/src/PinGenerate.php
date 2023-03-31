<?php

namespace Ananth\Pingenerator;

class PinGenerate
{
    protected $used_pins = [];

    public function generator()
    {
        $pin = $this->random_pin();

        while (in_array($pin, $this->used_pins)) {
            $pin = $this->random_pin();
        }

        array_push($this->used_pins,$pin);

        return $pin;
    }

    protected function random_pin()
    {
        $digits = range(0, 9);

        shuffle($digits);

        $pin = implode('', array_slice($digits, 0, 4));


        if ($this->is_valid_pin($pin)) {

            return $pin;
        }

        return $this->random_pin();

    }

    protected function is_valid_pin($pin)
    {
        // Checking for Palindrome patterns

        if ($pin == strrev($pin)) {
            
            return false;
        }

        // Checking for Repitative patterns
       
        for ($i = 0; $i < strlen($pin); $i++) {

            for ($j = $i + 1; $j < strlen($pin); $j++) {

                if ($pin[$i] == $pin[$j]) {

                    return false;

                    break 2;
                }
            }
        }

        //Checking for the sequential patterns 

        $sequential = true;
        
        $prev_digit = null;

        foreach (str_split($pin) as $digit) {

            if ($prev_digit !== null && $digit != $prev_digit + 1) {

                $sequential = false;

                break;
            }

            $prev_digit = $digit;
        }

        if ($sequential) {

            return false;
        }

        return true;
    }
}
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use Ananth\Pingenerator\PinGenerate;

class PingenerateTest extends TestCase
{
    /**
     * A basic unit test to check all are unique 
     *
     * @return void
     */
    
    public function testPinGeneration()
    {
        $pinGenerator = new PinGenerate();

        $pins = [];

        // Generating 1000 random 4 digit pins

        for ($i = 0; $i < 1000; $i++) {

            $pins[] = $pinGenerator->generator();

        }

        //Check every pin generated is unique in the array 

        $this->assertCount(1000, array_unique($pins));
    }

     /**
     * Checking for the condition like is PIN generated is not palindrome or sequential
     *
     * @return void
     */

    public function testValidationPinGeneration()
    
    {
        $pinGenerator = new PinGenerate();

        // Generate 1000 random 4 digit pins
        
        for ($i = 0; $i < 1000; $i++) {
            
            $pin = $pinGenerator->generator();

            //Checking the pin consists of 4 digits
            $this->assertEquals(4, strlen($pin));

            //Checking the pin generated is not sequential
            $this->assertFalse($this->isSequential($pin));

            //checking the pin generated is not palindrome
            $this->assertFalse($this->isPalindrome($pin));
        
        }        
    }

    /**
     * Checking PIN generated is not Palindrome 
     *
     * @return void
     */

    public function isPalindrome($pin)
    {
        return $pin === strrev($pin);
    }

    /**
     * Checking PIN generated is not Sequential 
     *
     * @return void
     */


    public function isSequential($pin)
    {
        $sequential = true;
        
        $prev_digit = null;

        foreach (str_split($pin) as $digit) {

            if ($prev_digit !== null && $digit != $prev_digit + 1) {

                return false;

                break;
            }

            $prev_digit = $digit;
        }

        return true;
    }
}

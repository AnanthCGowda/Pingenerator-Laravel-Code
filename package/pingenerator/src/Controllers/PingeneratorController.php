<?php 

namespace Ananth\Pingenerator\Controllers;

use App\Http\Controllers\Controller;

use Ananth\Pingenerator\Pingenerate;

class PingeneratorController extends Controller
{

	
	public function index()
	{
		return view("pingenerator::pingenerate");
	}

	public function generator()
	{

		$pinobject = new Pingenerate();

		$pin = $pinobject->generator();

		return view("pingenerator::pingenerate",compact('pin'));
	}
	
	/*public function generator()
	{

		$pin = $this->generateRandomPin();

        return view("pingenerator::pingenerate",compact('pin'));
    }

    protected function generateRandomPin()
    {
        $pin = rand(1000, 9999);

        while ($this->isInvalidPin($pin)) {

            $pin = rand(1000, 9999);
        }

        return $pin;
    }

    protected function isInvalidPin($pin)
    {
        return !$this->isPalindrome($pin) || !$this->isSequential($pin) || !$this->isRepeating($pin);
    }

    protected function isPalindrome($pin)
    {
    	$pin === strrev($pin);
    }

    protected function isSequential($pin)
    {
    	
    	
    }

    protected function isRepeating($pin)
    {
    	
    	$isRepetitive = true;

    	$pinarray = str_split($pin);
    	
 		$previousDigit = $pinarray[0];
		
		$isFirstDigitRepeated = true;
		
		foreach (str_split($pin) as $digit) 
		{
    		if ($digit != $previousDigit) 
    		{
	        	$isRepetitive = false;
        		$isFirstDigitRepeated = false;
        		break;
    		}
    		$previousDigit = $digit;
		}
    }
*/


    /*protected $used_pins = [];

    public function generator()
    {
        $pin = $this->random_pin();

        while (in_array($pin, $this->used_pins)) {
            $pin = $this->random_pin();
        }

        $this->used_pins[] = $pin;

        return view("pingenerator::pingenerate",compact('pin'));
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

        if (preg_match('/(\d)\1{3}/', $pin)) {
            
            return false;
        }

        $sequential = true;
        
        $prev_digit = null;

        foreach (str_split($pin) as $digit) {

            if ($prev_digit !== null && $digit != $prev_digit) {

                $sequential = false;

                break;
            }

            $prev_digit = $digit;
        }

        if ($sequential) {

            return false;
        }

        return true;
    }*/
}

?>
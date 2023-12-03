<?php

/**
* First and original solution, runtime 8ms
*/

class maximumWealth1 {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $maxWealth = 0;
        for($i = 0; $i < count($accounts); $i++) {
            $sum = 0;
            for($j = 0; $j < count($accounts[$i]); $j++) {
                $sum += $accounts[$i][$j];
            }
            $maxWealth = ($sum > $maxWealth) ? $sum : $maxWealth;
        }
        return $maxWealth;
    }
}

/**
* Second and better solution, runtime 6ms
*/
class maximumWealth2 {

    /**
    * @param Integer[][] $accounts
    * @return Integer
    */
    function maximumWealth($accounts) {
        foreach($accounts as $customerAccounts) {
            $customersWealth[] = array_sum($customerAccounts);
        }
        return max($customersWealth);
    }
}



/**
* Output
*/

// Create an instance of the class
$wealthCalculator = new MaximumWealth2();

// Call the method and print the result using var_dump
var_dump($wealthCalculator->maximumWealth([[1, 5], [7, 3], [3, 5]]));
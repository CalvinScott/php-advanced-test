<?php
  function count_change($money, $coins) {
    $i = 0;
    
    // Base cases:
    //- if given value is 0
    if ($money < 0) {  
      return 0;
    }
    //- if no denominations are given
    if ($coins == null || count($coins) == 0) {
      return 0;
    }
    
    // initialize array 
    $register = array_fill(0, $money+1, 0);
    $register[0] = 1;
    
    // For each type of coin, check if it is less than the amount of money
    foreach ($coins as $idx => $val) {
      for ($i = $val; $i <= $money; $i++) {
        /* If the coin is less, then see 
           how many we can fit of it and 
           maximum amount of previous denominations */
        $register[$i] += $register[$i - $val];
      }
    }

    return $register[$money];
  }
?>
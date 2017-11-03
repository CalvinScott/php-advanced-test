
<!DOCTYPE html>
<html>
<body>

<?php
  include 'CountChange.php'; 
  echo "<h1>Change Counter<br></h1>";

  function print_arr($arr) {
    if ($arr == null) {
      echo "invalid (null) input.";
      return;
    }
    foreach ($arr as $k => $value) {
      echo $value;
      if ($k !== count($arr)-1) echo ", ";
      else echo "<br>";
    }
  }

  function make_change($moneyInput, $coinArr) {
    echo "<br>Time to calculate!<br>";
    $answer = count_change($moneyInput, $coinArr);
    
    echo "There are $answer number of ways to divide $moneyInput with: ";
    print_arr($coinArr);
  }

  make_change(4, array(1,2));
  make_change(10, array(5,2,3));
  make_change(11, array(5,7));
  make_change(-1, array(3,4));
  make_change(50, null);

?>

</body>
</html>
<?php
  function mas ($numbers) {
   $sum = 0;
   foreach ($numbers as $number)
     $sum += $number;
   return $sum;
  }
  $values = array(10, 15, 16, 22, 4);
  echo mas($values);
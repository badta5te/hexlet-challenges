<?php

function fib ($n)
{
  $a = 0;
      $b = 1;
      for ($i = 0; $i < $n; $i++) {
          $t = $a + $b;
          $a = $b;
          $b = $t;
      }
      return $a;
}

print_r(fib(4));
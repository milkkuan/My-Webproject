<?php
  $x[0] = "Hello";
  echo $x[0];

  $pi = 3.141592;
  echo "\$pi 轉成整數 : ".(int)$pi."\n";
  $input = "3.141592pi";
  echo "pi 轉成浮點數 : ".(float)$input."\n";

  $pi = 3.141592;
  settype($pi, "integer");
  echo "\$pi 轉成整數: ".$pi."\n";
  $piString = "3.141592circle";
  echo "是否有轉成功".settype($piString, "float")."\n";
  echo "\$piString 是: ".$piString."\n";
?>
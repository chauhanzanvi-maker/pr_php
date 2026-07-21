<?php
function checkoddeven($num)
{
 if($num%2==0)
 {
  echo $num."is even no.";
 }
 else
 {
   echo $num."is odd no.";
 }
}
$number=15;
checkoddeven($number);
?>
<?php
$a = 10;
$b = 25;
$c = 15;

if($a > $b && $a > $c)
{
    echo "Maximum = $a";
}
elseif($b > $c)
{
    echo "Maximum = $b";
}
else
{
    echo "Maximum = $c";
}
?>
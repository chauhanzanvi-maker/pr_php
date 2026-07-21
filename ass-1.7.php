<?php
$m1 = 70;
$m2 = 80;
$m3 = 90;

$total = $m1 + $m2 + $m3;
$per = $total / 3;

echo "Total Marks = $total<br>";
echo "Percentage = $per<br>";

if($per >= 80)
{
    echo "Grade A";
}
elseif($per >= 60)
{
    echo "Grade B";
}
elseif($per >= 40)
{
    echo "Grade C";
}
else
{
    echo "Fail";
}
?>
<?php
$num = intval(readline());
$package=readline();
$price=0;
if($num<=50)
{
    $hall="Small Hall";
    $price=2500;
}
elseif($num>50 && $num<=100)
{
    $hall="Terrace";
    $price=5000;
}
elseif($num>120)
{
   $hall="Great Hall";
   $price=7500;
}
else
{
    echo "We do not have an appropriate hall.";
    die();
}
switch ($package) {
    case "Normal":
        $price=($price+500)*0.95;
        break;
    case "Gold":
        $price=($price+750)*0.90;
        break;
    case "Platinum":
        $price=($price+1000)*0.85;
        break;
}
$bill=$price/$num;
echo "We can offer you the $hall\n";
echo "The price per person is ";
printf("%.2f",$bill);
echo "$";
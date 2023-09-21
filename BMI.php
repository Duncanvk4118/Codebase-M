<?php

$weight = readLine("What is your weight in kg? ");
$length = readLine("What is your length in cm? ");

$length = $length / 100;
$BMI = $weight / pow(2, $length);

echo $BMI;

if ($BMI < 18.5) 
{
    echo "Je hebt ondergewicht";
}
elseif ($BMI >= 18.5 && $BMI <= 25)
{
    echo "Je bent op gezond gewicht";
}
elseif($BMI > 25 && $BMI < 30)
{
    echo "Je hebt overgewicht";
}
elseif ($BMI >= 30)
{
    echo "Je hebt ernstig overgewicht.";
} 
else
{
    echo "geen geldige BMI";
}
?>
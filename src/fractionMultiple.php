<?php
function fractionMultiple($firstFraction, $secondFraction)
{
    $num = getNumerator($firstFraction) * getNumerator($secondFraction);
    $denum = getDenominator($firstFraction) * getDenominator($secondFraction);
    return constructor($num, $denum);
}

<?php
function fractionAdd($firstFraction, $secondFraction)
{
    $num = getNumerator($firstFraction) * getDenominator($secondFraction) + getNumerator($secondFraction) * getDenominator($firstFraction);

    $denum = getDenominator($firstFraction) * getDenominator($secondFraction);

    return constructor($num, $denum);
}

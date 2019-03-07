<?php
function fractionDivision($firstFraction, $secondFraction)
{
    $num = getNumerator($firstFraction) * getDenominator($secondFraction);
    $denum = getDenominator($firstFraction) * getNumerator($secondFraction);
    return constructor($num, $denum);
}

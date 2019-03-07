<?php
function reduction($fraction)
{
    $gcd = gcd(getNumerator($fraction), getDenominator($fraction));
    $num = getNumerator($fraction) / $gcd;
    $denum = getDenominator($fraction) / $gcd;

    return constructor($num, $denum);
}

<?php
function getNumerator($pair)
{
    return car($pair);
}
function getDenominator($pair)
{
    return cdr($pair);
}

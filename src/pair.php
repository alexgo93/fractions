<?php
function constructor($a, $b)
{
    return function ($func) use ($a, $b) {
        return $func($a, $b);
    };
}
function car($pair)
{
    return $pair(function ($a, $b) {
        return $a;
    });
}
function cdr($pair)
{
    return $pair(function ($a, $b) {
        return $b;
    });
}

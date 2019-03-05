function constructor($a, $b)
{
    return function($func) use ($a, $b) {
        return $func($a, $b);
    };
}
function car($pair)
{
    return $pair(function($a, $b) {
        return $a;
    });
}
function cdr($pair)
{
    return $pair(function($a, $b) {
        return $b;
    });
}

$pair1 = constructor(1, 2);
$pair2 = constructor(3, 4);

function fraction($pair)
{
    return car($pair) . "/" . cdr($pair);
}

function fractionMultiple($firstFraction, $secondFraction)
{
    return car($firstFraction) * car($secondFraction) . "/" . cdr($firstFraction) * cdr($secondFraction);
}

function fractionDivision($firstFraction, $secondFraction)
{
    return car($firstFraction) * cdr($secondFraction) . "/" . cdr($firstFraction) * car($secondFraction);
}
function fractionAdd($firstFraction, $secondFraction)
{
    $resultFractionNum = car($firstFraction) * cdr($secondFraction) + car($secondFraction) * cdr($firstFraction);

    $resultFractionDenum = cdr($firstFraction) * cdr($secondFraction);

    return reduction($resultFractionNum, $resultFractionDenum);
}

function fractionSubtraction($firstFraction, $secondFraction)
{
    $resultFractionNum = car($firstFraction) * cdr($secondFraction) - car($secondFraction) * cdr($firstFraction);

    $resultFractionDenum = cdr($firstFraction) * cdr($secondFraction);

    return reduction($resultFractionNum, $resultFractionDenum);
}

function reduction($a, $b)
{
    $gcd = gcd($a, $b);
    $a = $a / $gcd;
    $b = $b / $gcd;
    if($a > $b){
        $c = intdiv($a, $b);
        return $c . " " . $a % $b . "/" . $b;
    }
    return $a . "/" . $b;
}



function gcd($a, $b) {
    if($b == 0) {
        return $a;
    }else {
        return gcd($b, residue($a, $b));
    }
}
function residue($a, $b) {
    return $a % $b;
}

function lcm($a, $b)
{
    return $a * $b / gcd($a, $b);
}


echo fractionSubtraction($pair1, $pair2);

// echo fractionDivision($pair1, $pair2);
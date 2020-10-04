<?php
    function sum($op1, $op2) {
        return $op1 + $op2;
    }

    function sub($op1, $op2) {
        return $op1 - $op2;
    }

    function mul($op1, $op2) {
        return $op1 * $op2;
    }

    function div($op1, $op2) {
        if ($op2 == 0)
            return INF;
        return $op1 / $op2;
    }

    $a = rand(-100, 100);
    $b = rand(-100, 100);

    echo "\$a = $a, \$b = $b";
    echo "<hr>\$a + \$b = ".sum($a, $b);
    echo "<br>\$a - \$b = ".sub($a, $b);
    echo "<br>\$a * \$b = ".mul($a, $b);
    echo "<br>\$a / \$b = ".div($a, $b);
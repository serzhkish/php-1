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

    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case '+':
                return sum($arg1, $arg2);
                break;
            case '-':
                return sub($arg1, $arg2);
                break;
            case '*':
                return mul($arg1, $arg2);
                break;
            case '/':
                return div($arg1, $arg2);
                break;
            default:
                return "Undefine operation";
        }
    }

    $a = rand(-100, 100);
    $b = rand(-100, 100);

    echo "\$a = $a, \$b = $b";
    echo "<hr>\$a + \$b = ".mathOperation($a, $b, "+");
    echo "<br>\$a - \$b = ".mathOperation($a, $b, "-");
    echo "<br>\$a * \$b = ".mathOperation($a, $b, "*");
    echo "<br>\$a / \$b = ".mathOperation($a, $b, "/");
    echo "<br>\$a % \$b = ".mathOperation($a, $b, "%");
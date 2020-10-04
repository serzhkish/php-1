<?php
    function power($val, $pow) {
        $c = 0;
        if ($pow == 0)
            return 1;
        if ($pow == 1)
            return $val;
        if ($pow >= 2)
            return $val * power($val, $pow - 1);
    }

    $val = 5;
    $pow = 4;
    echo "power($val, $pow) = ".power($val, $pow);
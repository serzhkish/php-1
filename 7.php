<?php
    function minute($i, $hOrM) {
        if (($i >= 5 && $i <= 19) || $i % 10 == 0 || $i % 10 == 5 || $i % 10 == 6 || $i % 10 == 7 || $i % 10 == 8 || $i % 10 == 9) {
            if ($hOrM)
                return "часов";
            else
                return "минут";
        }        
        if ($i % 10 == 1) {
            if ($hOrM)
                return "час";
            else
                return "минута";
        }
        if ($i % 10 == 2 || $i % 10 == 3 || $i % 10 == 4) {
            if ($hOrM)
                return "часа";
            else
                return "минуты";
        }
    }
    
    echo date("H")." ".minute(date("H"), true)." ".date("i")." ".minute(date("i"), false);
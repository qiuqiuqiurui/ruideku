<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/11
 * Time: 16:51
 */
function countgracepoint($n)
{
    $count = 0;
    for ($y = 1; $y * $y < $n; $y++) {

        $x = (int)sqrt($n - $y * $y);
        if ($y * $y + $x * $x == $n) {

            $count++;

        }

    }
    $count *= 4;
     $y = (int)sqrt($n);
    if ($y * $y == $n) $count += 4;
    return $count;


}

echo countgracepoint(64);
?>
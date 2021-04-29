<?php

namespace Phpunit\Utils;

class Utils
{
    public function reverseString(string $string): string
    {
        return implode(array_reverse(str_split($string)));
    }

    public function gt(int $num1, int $num2): bool
    {
        return $num1 > $num2;
    }

}

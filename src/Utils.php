<?php

namespace Phpunit\Utils;

function reverseString(string $string)
{
    return implode(array_reverse(str_split($string)));
}

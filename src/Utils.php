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

    public function set(&$coll, array $path, $value)
    {
        $length = count($path);
        $lastIndex = $length - 1;
        $index = 0;
        $nested = &$coll;

        while ($index < $length) {
            $key = $path[$index];
            $newValue = $value;
            if ($index !== $lastIndex) {
                $objValue = $nested[$key] ?? null;
                $newValue = is_array($objValue) ? $objValue : [];
            }
            $nested[$key] = $newValue;
            $nested = &$nested[$key];
            $index += 1;
        }
        return $coll;
    }
}

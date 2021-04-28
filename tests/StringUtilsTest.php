<?php

use function App\capitalize;

require_once __DIR__ . '/../vendor/autoload.php';

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo "Все тесты пройдины\n";
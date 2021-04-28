<?php

use function App\capitalize;
use Webmozart\Assert\Assert;

require_once __DIR__ . '/../vendor/autoload.php';

Assert::eq(capitalize(''), '');
Assert::eq(capitalize('hello'), 'Hello');

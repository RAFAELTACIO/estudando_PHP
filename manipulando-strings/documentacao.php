<?php

$trans = ['hello' => 'hi', 'hi' => 'hello'];
echo strtr('hi all, I said hello', $trans).PHP_EOL;

echo str_replace(['hi','hello'],['hello', 'hi'], 'hi all, i said hello');
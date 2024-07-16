<?php

require_once '/home/ukki/www/obuchalovo/classes/FileWriter.php';

use classes\FileWriter\FileWriter;

$test = new FileWriter('test.txt', 'test connection');
$test->WriteFile('test.txt', 'test connection');
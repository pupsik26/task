<?php

require_once 'Modules/RevertCharacters.php';
use Modules\RevertCharacters;

$str = 'Hello, my friend! How are you?';
$class = new RevertCharacters();
print_r($class->revertCharacters($str));


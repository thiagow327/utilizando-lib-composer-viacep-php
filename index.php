<?php

require __DIR__ . '/vendor/autoload.php';

use Jarouche\ViaCEP\HelperViaCep;

$result = HelperViaCep::getBuscaViaCEP('Json', '01001000');
var_dump($result);
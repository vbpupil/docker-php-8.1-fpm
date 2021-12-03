<?php

use vbpupil\Postcode\Postcode;

require 'vendor/autoload.php';

$p = new Postcode('SW1A 1AA');
echo "{$p->getType()} - {$p->getHead()} - {$p->getTail()}";

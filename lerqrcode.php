<?php

require_once 'vendor/autoload.php';

$qrcode = new \Zxing\QrReader('qrcode.png');

$text = $qrcode->text();

echo $text;

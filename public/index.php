<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

require_once __DIR__ . '/../vendor/autoload.php';

$Request = new Framework\Http\Request();
var_dump($Request->getQueryParams());
die;
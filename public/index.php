<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Framework\Http;

$Request = Http\RequestFactory::initRequest();
var_dump($Request->get());
die;
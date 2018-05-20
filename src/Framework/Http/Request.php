<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

namespace Framework\Http;

class Request
{
    public function getQueryParams() {
        return $_GET;
    }

    public function getQueryParamByName(string $name) {
        return array_key_exists($name, $_GET) ? $_GET[$name] : null;
    }
}
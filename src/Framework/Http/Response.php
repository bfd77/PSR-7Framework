<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

namespace Framework\Http;

class Response
{
    private $_body;

    private $_statusCode;

    private $_headers = [];

    private $_statusCodeMap = [
        200 => 'OK',
        400 => 'Bad Request',
        403 => 'Forbidden',
        404 => 'Not Found',
        500 => 'Internal Server Error',
    ];

    public function __construct($body = null)
    {
        $this->_body = $body;
    }

    public function setHeader(string $name, string $value): self
    {
        $new = clone $this;
        $new->_headers[$name] = $value;
        return $new;
    }

    public function getHeader(string $name)
    {
        return array_key_exists($name, $this->_headers) ? $this->_headers[$name] : null;
    }

    public function getHeaders(): array
    {
        return $this->_headers;
    }

    public function setStatus($code): self
    {
        $new = clone $this;
        $new->_statusCode = $code;
        return $new;
    }
}
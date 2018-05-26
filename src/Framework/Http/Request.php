<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

namespace Framework\Http;

class Request {

    /**
     * @var array
     */
    private $_get;

    /**
     * @var array
     */
    private $_post;

    public function get(): array
    {
        return $this->_get;
    }

    public function setGet(array $get): Request
    {
        $new = clone $this;
        $new->_get = $get;
        return $new;
    }

    public function post(): array
    {
        return $this->_post;
    }

    public function setPost(array $post): Request
    {
        $new = clone $this;
        $new->_post = $post;
        return $new;
    }

    public function getQueryParamByName(string $name)
    {
        return array_key_exists($name, $this->_get) ? $this->_get[$name] : null;
    }
}
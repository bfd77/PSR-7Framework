<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

namespace Framework\Http;

class RequestFactory
{
    public static function initRequest()
    {
        return (new Request())
            ->setGet($_GET)
            ->setPost($_POST);
    }
}
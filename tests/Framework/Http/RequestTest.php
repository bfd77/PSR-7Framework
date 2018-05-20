<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

use Framework\Http\Request;

class RequestTest extends PHPUnit\Framework\TestCase
{
    public function testEmpty() {
        $_GET = [];

        $request = new Request();
        $this->assertEquals([], $request->getQueryParams());
    }

    public function testGetQueryParams() {
        $_GET = [
            'test1' => 1,
            'test2' => 2,
        ];

        $expected = $_GET;

        $request = new Request();
        $this->assertEquals($expected, $request->getQueryParams());
    }

    public function testGetQueryParamByName() {
        $_GET = [
            'test1' => 1,
        ];

        $request = new Request();
        $this->assertEquals(1, $request->getQueryParamByName('test1'));
        $this->assertNull($request->getQueryParamByName('test2'));
    }
}
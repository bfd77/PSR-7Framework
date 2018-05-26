<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

use Framework\Http\Request;

class RequestTest extends PHPUnit\Framework\TestCase {

    public function testEmpty() {
        $request = (new Request)->setGet([]);
        $this->assertEquals([], $request->get());
    }

    public function testGetQueryParams() {

        $_GET = [
            'test1' => 1,
            'test2' => 2,
        ];

        $request = (new Request())->setGet($_GET);

        $this->assertEquals($_GET, $request->get());
    }

    public function testGetQueryParamByName() {
        $_GET = [
            'test1' => 1,
        ];

        $request = (new Request())->setGet($_GET);

        $this->assertEquals(1, $request->getQueryParamByName('test1'));
        $this->assertNull($request->getQueryParamByName('test2'));
    }

    public function testGetQueryParamsImmutability() {
        $_GET = ['test1' => 1];

        $request = (new Request())->setGet($_GET);

        $_GET = ['test1' => 100];

        $this->assertEquals(1, $request->getQueryParamByName('test1'));

    }
}
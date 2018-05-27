<?php
/**
 * @author Bendrikov Fedor <bendrikov.f@roistat.com>
 */

use Framework\Http\Response;

class ResponseTest extends PHPUnit\Framework\TestCase
{
    public function testSetHeader()
    {
        $response = (new Response())
            ->setHeader('header1', 'value1')
            ->setHeader('header2', 'value2');

        $expected = [
            'header1' => 'value1',
            'header2' => 'value2',
        ];

        $this->assertEquals($expected, $response->getHeaders());
        $this->assertEquals($expected['header1'], $response->getHeader('header1'));
        $this->assertNotEquals($expected['header2'], $response->getHeader('header1'));
        $this->assertNull($response->getHeader('not_existing_header'));
    }

    public function testSetHeaderImmutability()
    {
        $response1 = (new Response())->setHeader('header1', 'value1');
        $response2 = $response1->setHeader('header1', 'value10');

        $this->assertNotEquals($response1->getHeader('header1'), $response2->getHeader('header1'));
    }
}
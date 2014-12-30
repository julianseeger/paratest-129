<?php

class Test extends PHPUnit_Framework_TestCase
{
    public function dataProvider() {
        return [
            ['1'],
            ['2'],
            ['3']
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testSomething($number) {
        $this->assertTrue(is_numeric($number));
    }
}
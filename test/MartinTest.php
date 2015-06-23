<?php


namespace Regex\Test;

use Regex\GetInfo;

class MartinTest extends \PHPUnit_Framework_TestCase {

    public function testMartin()
    {

        $url = 'https://hu.wikipedia.org/wiki/Martin_Fowler';
        $martin = new GetInfo($url);

        $this->assertEquals('Martin Fowler', $martin->getName());
        $this->assertEquals(1963, $martin->getBday());
    }
}

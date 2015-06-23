<?php


namespace Regex\Test;

use Regex\GetInfo;
use Regex\CreateTxt;
class MartinTest extends \PHPUnit_Framework_TestCase {

    public function testMartin()
    {

        $url = 'https://hu.wikipedia.org/wiki/Martin_Fowler';
        $martin = new GetInfo($url);

        $create = new CreateTxt($martin);
        $create->createTxt();

        $this->assertEquals('Martin Fowler', $martin->getName());
        $this->assertEquals(1963, $martin->getBday());
    }
}

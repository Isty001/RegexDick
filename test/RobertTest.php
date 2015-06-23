<?php

namespace Regex\Test;

use Regex\GetInfo;
use Regex\CreateTxt;
class RobertTest extends \PHPUnit_Framework_TestCase
{
    public function testMartin()
    {

        $url = 'https://hu.wikipedia.org/wiki/Robert_C._Martin';
        $robert = new GetInfo($url);

        $create = new CreateTxt($robert);
        $create->createTxt();

        $this->assertEquals('Robert C. Martin', $robert->getName());
        $this->assertEquals(1952, $robert->getBday());
    }
}

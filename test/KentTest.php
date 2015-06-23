<?php

namespace Regex\Test;

use Regex\GetInfo;

class KentTest extends \PHPUnit_Framework_TestCase
{

    public function testKent()
    {

        $url = 'https://hu.wikipedia.org/wiki/Kent_Beck';
        $kent = new GetInfo($url);

        $this->assertEquals('Kent Beck', $kent->getName());
        $this->assertEquals(1961, $kent->getBday());
    }
}

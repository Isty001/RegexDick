<?php

namespace Regex\Test;

use Regex\GetInfo;
use Regex\CreateTxt;

class KentTest extends \PHPUnit_Framework_TestCase
{

    public function testKent()
    {

        $realUrl = 'https://hu.wikipedia.org/wiki/Kent_Beck';
        $testUrl = __DIR__ . '/TestPages/KentTestPage.html';

        $kent = new GetInfo($testUrl);

        $this->assertEquals('Kent Beck', $kent->getName());
        $this->assertEquals(1961, $kent->getBday());

        $create = new CreateTxt($kent);
        $create->createTxt();

        $expectedText = "Név: Kent Beck\nSzületett:1961\nLeírás:Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nIt has survived not only five centuries, but also\nthe leap into electronic typesetting, remaining essentially unchanged.";

        $actualText = file_get_contents('./Documents/Kent Beck.txt');
        $this->assertEquals($expectedText, $actualText);
    }
}

<?php

namespace Regex\Test;

use Regex\GetInfo;
use Regex\CreateTxt;

class MartinTest extends \PHPUnit_Framework_TestCase
{

    public function testMartin()
    {

        $realUrl = 'https://hu.wikipedia.org/wiki/Martin_Fowler';
        $testUrl = __DIR__ . '/TestPages/MartinTestPage.html';

        $martin = new GetInfo($testUrl);

        $this->assertEquals('Martin Fowler', $martin->getName());
        $this->assertEquals(1963, $martin->getBday());

        $create = new CreateTxt($martin);
        $create->createTxt();

        $expectedText = "Név: Martin Fowler\nSzületett:1963\nLeírás:Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nIt has survived not only five centuries, but also\nthe leap into electronic typesetting, remaining essentially unchanged.";
        $actualText = file_get_contents('./Documents/Martin Fowler.txt');
        $this->assertEquals($expectedText, $actualText);
    }
}


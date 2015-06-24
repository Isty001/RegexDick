<?php

namespace Regex\Test;

use Regex\GetInfo;
use Regex\CreateTxt;

class RobertTest extends \PHPUnit_Framework_TestCase
{

    public function testMartin()
    {

        $realUrl = 'https://hu.wikipedia.org/wiki/Robert_C._Martin';
        $testUrl = __DIR__ . '/TestPages/RobertTestPage.html';

        $robert = new GetInfo($testUrl);

        $this->assertEquals('Robert C. Martin', $robert->getName());
        $this->assertEquals(1952, $robert->getBday());

        $create = new CreateTxt($robert);
        $create->createTxt();

        $expectedText = "Név: Robert C. Martin\nSzületett:1952\nLeírás:Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.\n\nIt has survived not only five centuries, but also\nthe leap into electronic typesetting, remaining essentially unchanged.";
        $actualText = file_get_contents('./Documents/Robert C. Martin.txt');
        $this->assertEquals($expectedText, $actualText);
    }
}

<?php

namespace Regex;

class CreateTxt extends GetInfo
{
    private $info;

    public function __construct(GetInfo $info)
    {
        $this->info = $info;
    }

    public function createTxt()
    {
        $newTxt = fopen('./Documents/' . $this->info->getName() . ".txt", "w+");
        $text = 'Név: ' . trim($this->info->getName()) . "\nSzületett:" . trim($this->info->getBday()) . "\nLeírás:" . trim($this->info->getTextAndReplace());
        fwrite($newTxt, $text);
        fclose($newTxt);
    }
}
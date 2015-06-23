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
        $text = 'Név: ' . $this->info->getName() . '\n Született:' . $this->info->getBday() . '\n Leírás: ' . $this->info->getText();
        fwrite($newTxt, $text);
    }
}
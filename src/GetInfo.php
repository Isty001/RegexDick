<?php

namespace Regex;

class GetInfo
{

    protected $content;

    public function __construct($url)
    {
        $this->content = file_get_contents($url);
    }

    public function getName()
    {
        preg_match('|<p><b>(.+)</b>|', $this->content, $name);

        return $name[1];
    }

    public function getBday()
    {
        preg_match_all('|\(.*?(19[0-9]{2}).*?\)|', $this->content, $bday);

        return $bday[1][1];
    }

    public function getTextAndReplace()
    {
        preg_match_all('|</table>(.*?)</table>(.*?)<div id="toc" class="toc">|s', $this->content, $HTMLtext);
        $cleanText = preg_replace('|<((?!p)(?!br)[^>]+)>|', "", $HTMLtext[2][0]);

        return preg_replace('/<p>|<\/p>|<br>/', "\n", $cleanText);
    }
}
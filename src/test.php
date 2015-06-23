<?php

$url = 'https://hu.wikipedia.org/wiki/Kent_Beck';

$wiki = file_get_contents($url);

preg_match_all('|\(.*?([0-9]{4}).*\)|', $wiki, $matches);


print_r($wiki);
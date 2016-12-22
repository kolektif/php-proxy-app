<?php

$urlList = file_get_contents('https://raw.githubusercontent.com/kolektif/sansur-listesi/master/liste.json');
file_put_contents(__DIR__.'url_list.json', $urlList);

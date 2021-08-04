<?php

declare(strict_types=1);
// PHPでは同一名称の関数やクラスの利用ができない。->名前空間を使えば利用可能となる
// 参考）https://qiita.com/7968/items/1e5c61128fa495358c1f#%E3%81%AF%E3%81%98%E3%82%81%E3%81%AB
require_once dirname(__FILE__) . "/word/Writer.php";
require_once dirname(__FILE__) . "/excel/Writer.php";

// use office\excel; // こういう書き方もできる。特定の名前空間までをuse
use office\{
    excel\Writer as ExcelWriter,
    word\Writer as  WordWriter // こちらはまとめてエイリアスつけて
};

$writer = new ExcelWriter();
$writer->write();

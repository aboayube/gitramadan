<?php
require 'vendor/autoload.php';

use ArPHP\I18N\Arabic;
use Intervention\Image\ImageManager;



$manager = new ImageManager(['driver' => 'gd']);

$arbic = new  Arabic();
$text = $arbic->utf8Glyphs("وجيه ايوب شيخ العيد");



$image = $manager->make('img/finale.jpeg');
$image->text($text, 800, 1350, function ($font) {
    $font->file(__DIR__ . '/font/Tajawal-Regular.ttf');
    $font->size(80);
    $font->color('#000');
    $font->align('center');
    $font->valign('center');
});

$text = $arbic->utf8Glyphs("وجيه ايوب شيخ العيد");
$image->text($text, 800, 1450, function ($font) {
    $font->file(__DIR__ . '/font/Tajawal-Regular.ttf');
    $font->size(80);
    $font->color('#000');
    $font->align('center');
    $font->valign('center');
});


echo $image->resize(800, 800)->response();

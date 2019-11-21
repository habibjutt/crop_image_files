<?php

error_reporting(-1);
ini_set('display_errors', 'On');

$inFile = "GLS_PT_ES.png";
$outFile = "test-cropped.png";
$image = new Imagick();
$image->setResolution( 300, 300 );
$image->readImage($inFile);
$image->setImageFormat( "png" );
//$image->cropImage(2000,1000, 0, 0);
$image->cropImage(107,39, 245, 1445);
//$image->resizeimage(1500, 1500, \Imagick::FILTER_UNDEFINED, 1.1, TRUE);
$image->writeImage($outFile);

?>
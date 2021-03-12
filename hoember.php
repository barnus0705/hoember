<?php
header('Content-type:image/png');
$kep = imagecreate(600, 350); // (x, y)
$background = imagecolorallocate($kep, 120, 120, 120);
$feher = imagecolorallocate($kep, 255, 255, 255);
$fekete = imagecolorallocate($kep, 0, 0, 0);
imagefilledellipse($kep, 300, 275, 200, 200, $feher);
imagefilledellipse($kep, 300, 175, 150, 150, $feher);
imagefilledellipse($kep, 300, 75, 100, 100, $feher);
imagefilledellipse($kep, 275, 65, 15, 15, $fekete);
imagefilledellipse($kep, 325, 65, 15, 15, $fekete);
imagefilledellipse($kep, 300, 100, 10, 10, $fekete);
imagefilledellipse($kep, 290, 98, 10, 10, $fekete);
imagefilledellipse($kep, 310, 98, 10, 10, $fekete);
imagefilledellipse($kep, 320, 96, 10, 10, $fekete);
imagefilledellipse($kep, 280, 96, 10, 10, $fekete);
imagefilledellipse($kep, 300, 150, 25, 25, $fekete);
imagefilledellipse($kep, 300, 200, 25, 25, $fekete);
imagefilledellipse($kep, 300, 250, 25, 25, $fekete);
imagepng($kep);
?>

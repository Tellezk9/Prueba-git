<?php

require_once '../vendor/autoload.php';

$foto_original = '/dog.png';
$guardar_en = 'fotoMod.png';

$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(200, 200);

$thumb->show();
$thumb->save($guardar_en);

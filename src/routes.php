<?php
$routes = [
    'metadata',
    'getFaceDetection',
    'getOperationResult',
    'getVideoContent',
    'detectMotion',
    'videoStabilizes',
    'generateMotionThumbnail'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}


<?php

    require_once __DIR__ . '/../vendor/autoload.php';
    use App\Microwave\Microwave;

    $microwave = new Microwave(15, 'DF2', 60);

    echo $microwave->deFreeze();
        



<?php

    require dirname(__DIR__) . '/src/Session.php';
    $Session = new Session();
    $Session->Start();

    // Yeni session oluşturma
    $Session->Create('test', 'BMathers35');

    // Oluşturulan sessionu ekrana yazdırma
    echo $Session->Get('test');

    // Session silme
    $Session->Delete('test');
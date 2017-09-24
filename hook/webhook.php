<?php
    error_reporting(1);

    $target = '/www/web/ngrok_9shop_club/public_html'; // Éú²ú»·¾³webÄ¿Â¼

    $token = 'photo';
    $wwwUser = 'root';
    $wwwGroup = 'root';

    $json = json_decode(file_get_contents('php://input'), true);

    if (empty($json['token']) || $json['token'] !== $token) {
        exit('error request');
    }

    $repo = $json['repository']['name'];

    $cmd = "cd $target && git pull";

    echo shell_exec($cmd);

?>

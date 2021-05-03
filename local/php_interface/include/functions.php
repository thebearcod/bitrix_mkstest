<?php

/**
 * Вспомогательные функции и хелперы
 */

function pr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


function getPhone() {
    $phone = '+7 495 000-000-000';
    if (isset($_GET['utm_source']) && $_GET['utm_source'] == 'test') {
        $phone = '+7 495 111-11-11';
    }
    return $phone;
}
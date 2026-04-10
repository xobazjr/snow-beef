<?php
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en';
    $lang = substr($lang, 0, 2);

    if ($lang === 'th') {
        header("Location: /th");
    } elseif ($lang === 'en') {
        // header("Location: /en");
        header("Location: /th");
    } else {
        header("Location: /th");
    }
    exit();
?>
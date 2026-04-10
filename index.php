<?php
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en';
    $lang = substr($lang, 0, 2);

    if ($lang === 'th') {
        header("Location: /snow-beef/th");
    } elseif ($lang === 'en') {
        // header("Location: /en");
        header("Location: /snow-beef/th");
    } else {
        header("Location: /snow-beef/th");
    }
    exit();
?>
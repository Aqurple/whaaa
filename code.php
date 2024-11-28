<?php
    /* Работа с cookies: theme и font_size */

    // Установка cookie "theme"
    if (isset($_GET['set_theme_dark'])) {
        setcookie("theme", "dark", [
            "expires" => time() + (60 * 60 * 24 * 30), // 30 дней
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_GET['set_theme_light'])) {
        setcookie("theme", "light", [
            "expires" => time() + (60 * 60 * 24 * 30), // 30 дней
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    // Удаление cookie "theme"
    if (isset($_GET['delete_theme'])) {
        setcookie("theme", "", [
            "expires" => time() - 3600,
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    // Установка cookie "font_size"
    if (isset($_GET['font_size_10px'])) {
        setcookie("font_size", "10px", [
            "expires" => time() + (60 * 60 * 24 * 30), // 30 дней
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_GET['font_size_20px'])) {
        setcookie("font_size", "20px", [
            "expires" => time() + (60 * 60 * 24 * 30), // 30 дней
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_GET['font_size_40px'])) {
        setcookie("font_size", "40px", [
            "expires" => time() + (60 * 60 * 24 * 30), // 30 дней
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    // Получение значений cookies
    $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : "default";
    $font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : "16px";
?>

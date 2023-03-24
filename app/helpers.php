<?php


if (!function_exists('asset_url')) {
    function asset_url(string $fileAddress)
    {
        $assetsPath = __DIR__ . DIRECTORY_SEPARATOR . '../assets' . DIRECTORY_SEPARATOR;

        return ($_ENV['APP_URL'] ?? '') . $assetsPath . $fileAddress;
    }
}

if (!function_exists('view')) {
    function view(string $view, array $vars = [])
    {
        $viewsPath = __DIR__ . DIRECTORY_SEPARATOR . '../views' . DIRECTORY_SEPARATOR;

        if (!empty($vars)) {
            extract($vars);
        }

        return include $viewsPath . str_replace('.', DIRECTORY_SEPARATOR, $view) . '.php';
    }
}
<?php


if (!function_exists('asset_url')) {
    function asset_url(string $fileAddress)
    {
        $assetsPath = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../assets' . DIRECTORY_SEPARATOR);

        return ($_ENV['APP_URL'] ?? '') . $assetsPath . DIRECTORY_SEPARATOR . $fileAddress;
    }
}

if (!function_exists('view')) {
    function view(string $view, array $vars = [])
    {
        $viewsPath = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../views' . DIRECTORY_SEPARATOR);

        if (!empty($vars)) {
            extract($vars);
        }

        return include $viewsPath . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $view) . '.php';
    }
}
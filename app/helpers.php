<?php

if (!function_exists('site_url')) {
    function site_url(string $uri)
    {
        return ($_ENV['APP_URL'] ?? '') . '/' . $uri;
    }
}

if (!function_exists('asset_url')) {
    function asset_url(string $path)
    {
        return ($_ENV['APP_URL'] ?? '') . '/assets/' . $path;
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
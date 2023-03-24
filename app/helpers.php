<?php


if (function_exists('asset_url')) {
    function asset_url(string $fileAddress)
    {
        $assetsPath = __DIR__ . DIRECTORY_SEPARATOR . '../assets' . DIRECTORY_SEPARATOR;

        return ($_ENV['APP_URL'] ?? '') . $assetsPath . $fileAddress;
    }
}
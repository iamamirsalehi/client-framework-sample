<?php

use eftec\bladeone\BladeOne;

if (!function_exists('view')) {
    function view(string $view, array $vars = [])
    {
        $viewsPath = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../views' . DIRECTORY_SEPARATOR);
        $cachePath = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../cache' . DIRECTORY_SEPARATOR);
        $blade = new BladeOne($viewsPath, $cachePath, BladeOne::MODE_DEBUG);
        echo $blade->run($view, $vars);
    }
}

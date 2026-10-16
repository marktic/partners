<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Library\View;

class ViewUtility
{
    public static function registerViewPaths($view, $module = null): void
    {
        $modules = [$module, 'base'];
        foreach ($modules as $moduleName) {
            if ($moduleName === null || $moduleName === '') {
                continue;
            }

            $path = realpath(__DIR__ . '/../../Resources/views/' . $moduleName);
            if ($path === false) {
                continue;
            }

            $view->addPath($path);
            $view->addPath($path, 'MarkticPartners');
        }
    }
}

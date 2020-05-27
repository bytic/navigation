<?php

namespace ByTIC\Navigation\Utility;

/**
 * Class NavigationHelper
 * @package ByTIC\Navigation\Utility
 */
class NavigationHelper
{
    /**
     * @param null $path
     * @return string
     */
    public static function view($path = null)
    {
        return dirname(dirname(__DIR__))
            . DIRECTORY_SEPARATOR . 'views'
            . ($path ? $path : null);
    }
}

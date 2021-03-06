<?php

namespace common;

use ZPHP\Core\Factory;

/**
 * 获取class实例的工具类
 *
 * @package service
 *
 */
class loadClass
{

    public static function getService($service)
    {
        return Factory::getInstance("service\\{$service}");
    }

    public static function getModel($model)
    {
        return Factory::getInstance("model\\{$model}");
    }

}
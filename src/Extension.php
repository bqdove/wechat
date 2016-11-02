<?php
/**
 * This file is part of Notadd.
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-14 17:12
 */
namespace Notadd\Wechat;
use Notadd\Foundation\Extension\Abstracts\ExtensionRegistrar;
/**
 * Class Extension
 * @package Notadd\Wechat
 */
class Extension extends ExtensionRegistrar {
    /**
     * @return string
     */
    public function getExtensionName() {
        return 'notadd/wechat';
    }
    /**
     * @return string
     */
    public function getExtensionPath() {
        return realpath(__DIR__ . '/../');
    }
}
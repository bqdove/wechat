<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-14 17:12
 */
namespace Notadd\Wechat;

use Notadd\Foundation\Extension\Abstracts\ExtensionRegistrar;

/**
 * Class Extension.
 */
class Extension extends ExtensionRegistrar
{
    /**
     * TODO: Method getExtensionInfo Description
     *
     * @return array
     */
    public function getExtensionInfo()
    {
        return [
            'author'      => 'twilroad <269044570@qq.com>',
            'description' => 'A module for Notadd',
        ];
    }

    /**
     * TODO: Method getExtensionName Description
     *
     * @return string
     */
    public function getExtensionName()
    {
        return 'notadd/wechat';
    }

    /**
     * TODO: Method getExtensionPath Description
     *
     * @return string
     */
    public function getExtensionPath()
    {
        return realpath(__DIR__ . '/../');
    }

    /**
     * TODO: Method register Description
     */
    public function register()
    {
        $this->alias('wechat', [
            'EasyWeChat\Foundation\Application',
            'Notadd\Wechat\WechatManager',
        ]);
        $this->container->singleton('wechat', function ($application) {
            return new WechatManager($application, $application['setting']);
        });
    }
}

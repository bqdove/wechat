<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-14 17:12
 */
namespace Notadd\Wechat;

use Illuminate\Support\ServiceProvider;

/**
 * Class Extension.
 */
class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Extension's register.
     */
    public function register()
    {
        $this->app->alias('wechat', 'EasyWeChat\Foundation\Application');
        $this->app->alias('wechat', 'Notadd\Wechat\WechatManager');
        $this->app->singleton('wechat', function ($application) {
            return new WechatManager($application, $application['setting']);
        });
    }
}

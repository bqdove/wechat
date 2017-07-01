<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2016, notadd.com
 * @datetime 2016-10-14 17:12
 */
namespace Notadd\Wechat;

use Illuminate\Events\Dispatcher;
use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Wechat\Injections\Installer;
use Notadd\Wechat\Injections\Uninstaller;
use Notadd\Wechat\Listeners\CsrfTokenRegister;
use Notadd\Wechat\Listeners\FlowRegister;
use Notadd\Wechat\Listeners\PermissionGroupRegister;
use Notadd\Wechat\Listeners\PermissionModuleRegister;
use Notadd\Wechat\Listeners\PermissionRegister;
use Notadd\Wechat\Listeners\PermissionTypeRegister;
use Notadd\Wechat\Listeners\RouteRegister;

/**
 * Class Extension.
 */
class ModuleServiceProvider extends Module
{
    /**
     * Boot module.
     */
    public function boot()
    {
        $this->app->make(Dispatcher::class)->subscribe(CsrfTokenRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(FlowRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionGroupRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionModuleRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionTypeRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(RouteRegister::class);
    }

    /**
     * Install for module.
     *
     * @return string
     */
    public static function install()
    {
        return Installer::class;
    }

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

    /**
     * Uninstall for module.
     *
     * @return string
     */
    public static function uninstall()
    {
        return Uninstaller::class;
    }
}

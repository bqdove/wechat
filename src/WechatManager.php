<?php
/**
 * This file is part of Notadd.
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-11-03 11:25
 */
namespace Notadd\Wechat;
use EasyWeChat\Foundation\Application;
use Illuminate\Container\Container;
use Notadd\Foundation\Setting\Contracts\SettingsRepository;
/**
 * Class WechatManager
 * @package Notadd\Wechat
 */
class WechatManager extends Application {
    /**
     * @var \Illuminate\Container\Container|\Notadd\Foundation\Application
     */
    protected $container;
    /**
     * @var \Notadd\Foundation\Setting\Contracts\SettingsRepository
     */
    protected $settings;
    /**
     * WechatManager constructor.
     * @param \Illuminate\Container\Container $container
     * @param \Notadd\Foundation\Setting\Contracts\SettingsRepository $settings
     */
    public function __construct(Container $container, SettingsRepository $settings) {
        $this->container = $container;
        $this->settings = $settings;
        parent::__construct($settings->get('wechat'));
    }
}
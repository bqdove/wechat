<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 11:51
 */
namespace Notadd\Wechat\Injections;

/**
 * Class Installer.
 */
class Installer extends \Notadd\Foundation\Module\Abstracts\Installer
{

    /**
     * @return bool
     */
    public function handle()
    {
        return true;
    }

    /**
     * @return array
     */
    public function require ()
    {
        return [];
    }
}

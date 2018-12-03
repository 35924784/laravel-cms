<?php
/**
 * Laravel-cms - cms based on laravel
 *
 * @category  Laravel-cms
 * @package   Laravel
 * @author    Qiangzi <35924784@qq.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/35924784/laravel-cms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Wanglelecc\Laracms\Observers;

use Wanglelecc\Laracms\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 用户观察者
 *
 * Class UserObserver
 * @package Wanglelecc\Laracms\Observers
 */
class UserObserver
{

    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }
}
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

namespace Wanglelecc\Laracms\Policies;

use Wanglelecc\Laracms\Models\User;
use Wanglelecc\Laracms\Models\Navigation;

/**
 * 导航授权策略
 *
 * Class NavigationPolicy
 * @package Wanglelecc\Laracms\Policies
 */
class NavigationPolicy extends Policy
{
    public function index(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }

    public function create(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }

    public function update(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }

    public function destroy(User $user, Navigation $navigation)
    {
        return $user->can('manage_navigation');
    }
}

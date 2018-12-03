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
use Wanglelecc\Laracms\Models\Form;

/**
 * 表单授权策略
 *
 * Class PagePolicy
 * @package Wanglelecc\Laracms\Policies
 */
class FormPolicy extends Policy
{

    public function index(User $user, Form $form)
    {
        return $user->can("manage_form");
    }

    public function show(User $user, Form $form)
    {
        return $user->can("manage_form");
    }

    public function destroy(User $user, Form $form)
    {
        return $user->can("manage_form");
    }
}

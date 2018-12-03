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

namespace Qiangzi\LaravelCms\Policies;

use Qiangzi\LaravelCms\Models\User;
use Qiangzi\LaravelCms\Models\Category;

/**
 * 分类授权策略
 *
 * Class CategoryPolicy
 * @package Qiangzi\LaravelCms\Policies
 */
class CategoryPolicy extends Policy
{
    public function index(User $user, Category $category)
    {
        return $user->can('manage_category');
    }

    public function create(User $user, Category $category)
    {
        return $user->can('manage_category');
    }

    public function update(User $user, Category $category)
    {
        return $user->can('manage_category');
    }

    public function destroy(User $user, Category $category)
    {
        return $user->can('manage_category');
    }
}

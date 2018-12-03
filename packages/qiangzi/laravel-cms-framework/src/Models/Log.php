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

namespace Qiangzi\LaravelCms\Models;

/**
 * 日志模型
 * 
 * Class Log
 * @package Qiangzi\LaravelCms\Models
 */
class Log extends Model
{
    protected $fillable = ['group','type', 'account', 'browser', 'host', 'uri', 'method', 'model', 'ip', 'location', 'user_agent', 'description', 'data', 'user_id',];
}

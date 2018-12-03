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

namespace Qiangzi\LaravelCms\Observers;

use Ip;
use Auth;
use Agent;
use Request;
use Qiangzi\LaravelCms\Models\Log;
use Illuminate\Support\Carbon;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 日志观察者
 *
 * Class LogObserver
 * @package Qiangzi\LaravelCms\Observers
 */
class LogObserver
{

    public function creating(Log $log)
    {
        $ip = Request::ip();
        $location = Ip::find($ip);
        $location = is_array($location) && !empty($location) ? trim(implode(' ', array_slice($location,0,4))) : '未知';

        $log->account = Auth::user()->name;
        $log->browser = Agent::browser();
        $log->host = Request::root();
        $log->uri = Request::path();
        $log->method = Request::method();
        $log->ip = $ip;
        $log->location = $location;
        $log->user_agent = json_encode(Agent::getUserAgent(), JSON_UNESCAPED_UNICODE);
        $log->user_id = Auth::user()->id;
        $log->data = json_encode(Request::all(),JSON_UNESCAPED_UNICODE);
    }

    public function updating(Log $log)
    {

    }
}
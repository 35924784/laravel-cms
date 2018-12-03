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

namespace Qiangzi\LaravelCms\Handlers;

use Qiangzi\LaravelCms\Http\Requests\Request;
use Qiangzi\LaravelCms\Models\WechatMenu;
use Qiangzi\LaravelCms\Models\Wechat;
use Qiangzi\LaravelCms\Models\WechatResponse;
use EasyWeChat\Kernel\Contracts\EventHandlerInterface;

/**
 * 微信文本消息处理
 *
 * Class TextMessageHandler
 * @package Qiangzi\LaravelCms\Handlers
 */
class TextMessageHandler
{

    public function handle(Wechat $wechat, $message = []){
        return $this->text($wechat,$message['Content']);
    }

    /**
     * 文本响应处理
     *
     * @param Wechat $wechat
     * @param $key
     * @return null
     */
    protected function text(Wechat $wechat, $key){
        $response = WechatResponse::where('wechat_id',$wechat->id)->where('key', $key)->first();

        return $response ? $response->handle() : WechatResponse::defaultResponse($wechat->id);
    }


}
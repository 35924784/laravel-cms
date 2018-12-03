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

namespace Qiangzi\LaravelCms\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Qiangzi\LaravelCms\Models\Setting;
use Qiangzi\LaravelCms\Handlers\AdministratorMenuHandler;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
	    // 注册模型观察者
		\Qiangzi\LaravelCms\Models\User::observe(                  \Qiangzi\LaravelCms\Observers\UserObserver::class);
		\Qiangzi\LaravelCms\Models\WechatMenu::observe(            \Qiangzi\LaravelCms\Observers\WechatMenuObserver::class);
		\Qiangzi\LaravelCms\Models\Wechat::observe(                \Qiangzi\LaravelCms\Observers\WechatObserver::class);
		\Qiangzi\LaravelCms\Models\Block::observe(                 \Qiangzi\LaravelCms\Observers\BlockObserver::class);
		\Qiangzi\LaravelCms\Models\Link::observe(                  \Qiangzi\LaravelCms\Observers\LinkObserver::class);
		\Qiangzi\LaravelCms\Models\Project::observe(               \Qiangzi\LaravelCms\Observers\ProjectObserver::class);
		\Qiangzi\LaravelCms\Models\Category::observe(              \Qiangzi\LaravelCms\Observers\CategoryObserver::class);
		\Qiangzi\LaravelCms\Models\Navigation::observe(            \Qiangzi\LaravelCms\Observers\NavigationObserver::class);
		\Qiangzi\LaravelCms\Models\Page::observe(                  \Qiangzi\LaravelCms\Observers\PageObserver::class);
		\Qiangzi\LaravelCms\Models\Article::observe(               \Qiangzi\LaravelCms\Observers\ArticleObserver::class);
		\Qiangzi\LaravelCms\Models\Slide::observe(                 \Qiangzi\LaravelCms\Observers\SlideObserver::class);
		\Qiangzi\LaravelCms\Models\File::observe(                  \Qiangzi\LaravelCms\Observers\FileObserver::class);
		\Qiangzi\LaravelCms\Models\WechatResponse::observe(        \Qiangzi\LaravelCms\Observers\WechatResponseObserver::class);
		\Qiangzi\LaravelCms\Models\Reply::observe(                 \Qiangzi\LaravelCms\Observers\ReplyObserver::class);
		\Qiangzi\LaravelCms\Models\Log::observe(                   \Qiangzi\LaravelCms\Observers\LogObserver::class);
		\Qiangzi\LaravelCms\Models\MultipleFile::observe(          \Qiangzi\LaravelCms\Observers\MultipleFileObserver::class);
		\Qiangzi\LaravelCms\Models\Form::observe(                  \Qiangzi\LaravelCms\Observers\FormObserver::class);

        // 设置时区
        \Carbon\Carbon::setLocale('zh');


        // 检测是否在命令行模式
        if ($this->app->runningInConsole()) {
           // 命令行模式
        }
        else{
            // 非命令行模式
            Setting::afflux();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

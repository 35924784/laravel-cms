<?php

namespace Qiangzi\LaravelCms\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \Qiangzi\LaravelCms\Models\WechatResponse::class                  => \Qiangzi\LaravelCms\Policies\WechatResponsePolicy::class,
		 \Qiangzi\LaravelCms\Models\WechatMenu::class                      => \Qiangzi\LaravelCms\Policies\WechatMenuPolicy::class,
		 \Qiangzi\LaravelCms\Models\Wechat::class                          => \Qiangzi\LaravelCms\Policies\WechatPolicy::class,
		 \Qiangzi\LaravelCms\Models\Article::class                         => \Qiangzi\LaravelCms\Policies\ArticlePolicy::class,
		 \Qiangzi\LaravelCms\Models\Block::class                           => \Qiangzi\LaravelCms\Policies\BlockPolicy::class,
		 \Qiangzi\LaravelCms\Models\Link::class                            => \Qiangzi\LaravelCms\Policies\LinkPolicy::class,
		 \Qiangzi\LaravelCms\Models\Project::class                         => \Qiangzi\LaravelCms\Policies\ProjectPolicy::class,
		 \Qiangzi\LaravelCms\Models\Slide::class                           => \Qiangzi\LaravelCms\Policies\SlidePolicy::class,
		 \Qiangzi\LaravelCms\Models\Category::class                        => \Qiangzi\LaravelCms\Policies\CategoryPolicy::class,
		 \Qiangzi\LaravelCms\Models\Navigation::class                      => \Qiangzi\LaravelCms\Policies\NavigationPolicy::class,
		 \Qiangzi\LaravelCms\Models\File::class                            => \Qiangzi\LaravelCms\Policies\FilePolicy::class,
		 \Qiangzi\LaravelCms\Models\Setting::class                         => \Qiangzi\LaravelCms\Policies\SettingPolicy::class,
         \Qiangzi\LaravelCms\Models\User::class                            => \Qiangzi\LaravelCms\Policies\UserPolicy::class,
         \Qiangzi\LaravelCms\Models\Page::class                            => \Qiangzi\LaravelCms\Policies\PagePolicy::class,
         \Qiangzi\LaravelCms\Models\Reply::class                           => \Qiangzi\LaravelCms\Policies\ReplyPolicy::class,
         \Qiangzi\LaravelCms\Models\Form::class                            => \Qiangzi\LaravelCms\Policies\FormPolicy::class,

         \Spatie\Permission\Models\Role::class                             => \Qiangzi\LaravelCms\Policies\RolePolicy::class,
         \Spatie\Permission\Models\Permission::class                       => \Qiangzi\LaravelCms\Policies\PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

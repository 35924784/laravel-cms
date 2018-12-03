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

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 管理后台相关路由定义
|
*/

/*
 * -------------------------------------------------------------------------
 * 后台不需要需要认证相关路由
 * -------------------------------------------------------------------------
 */
Route::group(['domain' => config('administrator.domain'), 'prefix' => config('administrator.uri'), 'namespace' => 'Administrator', 'middleware' => [], ], function () {


});

/*
 * -------------------------------------------------------------------------
 * 后台需要认证相关路由
 * -------------------------------------------------------------------------
 */
Route::group(['domain' => config('administrator.domain'), 'prefix' => config('administrator.uri'), 'namespace' => 'Administrator', 'middleware' => ['laracms.auth'], ], function () {

    # 后端示例路由
    Route::get('example', 'ExampleController@index')->name('administrator.example');

    #Append Route
});

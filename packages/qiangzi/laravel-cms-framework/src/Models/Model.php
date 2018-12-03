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

namespace Wanglelecc\Laracms\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Wanglelecc\Laracms\Models\Traits\WithOrderHelper;
use Wanglelecc\Laracms\Models\Traits\WithMultipleFilesTraits;

class Model extends EloquentModel
{
    use WithOrderHelper;
    use WithMultipleFilesTraits;


}

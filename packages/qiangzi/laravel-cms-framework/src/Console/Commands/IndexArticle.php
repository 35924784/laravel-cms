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

namespace Qiangzi\LaravelCms\Console\Commands;

use Illuminate\Console\Command;
use TeamTNT\TNTSearch\TNTSearch;
use Qiangzi\LaravelCms\Models\Article;
use Qiangzi\LaravelCms\Handlers\TokenizerHandler;

/**
 * 手动生成文章分词索引
 *
 * Class IndexArticle
 * @package Qiangzi\LaravelCms\Console\Commands
 */
class IndexArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracms:article-index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index the article table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Article $article)
    {
        $driver = config('database.default');
        $connections = config("database.connections.$driver");
        $prefix = $connections['prefix'];
        $config = config('scout.tntsearch') + $connections;
        $table = $prefix.$article->getTable();

        $tnt = new TNTSearch;
        $tnt->loadConfig($config);
        $tnt->setTokenizer(new TokenizerHandler(config('scout.tntsearch.tokenizer.jieba')));
        $tnt->setDatabaseHandle(app('db')->connection()->getPdo());

        $indexer = $tnt->createIndex('articles.index');
        $indexer->query("SELECT id, alias, title, subtitle, keywords, description, author, content FROM {$table}");
//        $indexer->setLanguage('no');
        $indexer->run();
    }
}

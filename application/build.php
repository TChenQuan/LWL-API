<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    // 生成运行时目录
    '__dir__'  => ['runtime/cache', 'runtime/log', 'runtime/temp', 'runtime/template'],
    '__file__' => ['common.php'],

    // 定义index模块的自动生成
    'music'    => [
        'controller' => ['Netease', 'Xiami'],
    ],
    'img'      => [
        'controller' => ['Proxy', 'Qrcode'],
    ],
    'hitokoto' => [
        'controller' => ['Get', 'Add'],
    ],
    'stats'    => [
        'controller' => ['Program'],
    ],

    // 。。。 其他更多的模块定义
];

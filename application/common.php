<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use app\lib\exception\Succeed;
// 应用公共文件
function _success($data = null, $msg = 'success', $code = 200)
{
    $res_data = (object)[];
    $data !== null && $res_data = $data;
    $succeed = new Succeed();
    $succeed->data = $res_data;
    $succeed->code = (string)$code;
    $succeed->msg = (string)$msg;
    throw $succeed;
}

function _error($msg = '系统错误，请联系系统管理员', $data = null, $code = 400)
{
    $res_data = (object)[];
    $data !== null && $res_data = $data;
    $succeed = new Succeed();
    $succeed->data = $res_data;
    $succeed->code = (string)$code;
    $succeed->msg = (string)$msg;
    throw $succeed;
}

<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 17/8/12
 * Time: 下午7:40
 */

namespace app\lib\exception;


class MissException extends BaseException
{
    public $code = 404;
    public $msg = '访问失败,找不到该方法';
    public $errorCode = 10001;

}
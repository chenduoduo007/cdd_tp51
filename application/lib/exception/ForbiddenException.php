<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/17
 * Time: 上午9:10
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;

}
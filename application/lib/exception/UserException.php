<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/17
 * Time: 上午9:05
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;

}
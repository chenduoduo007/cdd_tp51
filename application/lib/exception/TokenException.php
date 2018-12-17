<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/17
 * Time: 上午9:06
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $status = 3;
    public $code = 200;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;

}
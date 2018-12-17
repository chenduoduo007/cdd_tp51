<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/7
 * Time: 上午10:02
 */

namespace app\lib\exception;



class ParameterException extends BaseException
{
    public $code = 400;
    public $errorCode = 20000;
    public $msg = "参数错误";

}
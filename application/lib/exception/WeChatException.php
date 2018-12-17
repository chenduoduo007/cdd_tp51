<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/17
 * Time: 上午9:03
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = 'wechat unknow error';
    public $errorCode = 999;

}
<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/15
 * Time: 下午3:27
 */

namespace app\lib\exception;


class Succeed extends BaseException
{
    public $status = 1;
    public $data = [];
    public $code = 200;
    public $errorCode =200;
    public $msg = "获取数据成功";

}
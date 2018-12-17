<?php

/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/7
 * Time: 上午9:48
 */
namespace  app\lib\exception;
use think\Exception;

class BaseException extends Exception
{

    public $code = 400;
    public $msg = 'invalid parameters';
    public $errorCode = 999;
    public $status = 0;
    public $data = '';

    public $shouldToClient = true;

    /**
     * 构造函数，接收一个关联数组
     * @param array $params 关联数组只应包含code、msg和errorCode，且不应该是空值
     */
    public function __construct($params=[])
    {
        $this->data = (object)[];
        if(!is_array($params)){
            return;
        }
        if(array_key_exists('code',$params)){
            $this->code = $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if(array_key_exists('errorCode',$params)){
            $this->errorCode = $params['errorCode'];
        }
        if(array_key_exists('data',$params)){
            $this->data = $params['data'];
        }
    }

}
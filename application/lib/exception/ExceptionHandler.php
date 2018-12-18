<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/8/7
 * Time: 上午9:50
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\Request;
use think\Log;
use \Exception;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    private $status;
    private $data;
    public function render(Exception $e)
    {
        if ($e instanceof BaseException)
        {

           //如果是自定义异常，则控制http状态码，不需要记录日志
           //因为这些通常是因为客户端传递参数错误或者是用户请求造成的异常
           //不应当记录日志
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
            $this->status = $e->status;
            $this->data = $e->data;
        }
        else{
             // 如果是服务器未处理的异常，将http状态码设置为500，并记录日志
            // env('APP_DEBUG')/config('app_debug')
            if(env('APP_DEBUG')){
               // 调试状态下需要显示TP默认的异常页面，因为TP的默认页面
               // 很容易看出问题
              return parent::render($e);
             }

            $this->code = 200;
            $this->msg = 'server error';
            $this->errorCode = 999;
            $this->status = 0;
            $this->data = (object)[];
            $this->recordErrorLog($e);
        }

        $request = new Request();
        $result = [
            'code' => $this->code,
//            'status' => $this->status,
            'data' => $this->data,
            'msg'  => $this->msg,
//            'error_code' => $this->errorCode,
//            'request_url' => $request = $request->baseUrl()
        ];
        return json($result, $this->code);
    }

    /*
     * 将异常写入日志
     */
    private function recordErrorLog(Exception $e)
    {
//        Log::record($e->getTraceAsString());
        \Log::record($e->getMessage(),'error');
    }

}
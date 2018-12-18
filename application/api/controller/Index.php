<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2018/12/17
 * Time: 9:56 PM
 */

namespace app\api\controller;


use app\api\server\server;
use app\api\validate\IdValidate;

class Index extends BaseController
{
    /**
     * api接口
     * @author Chenduoduo
     */
    public function index(){
        // 验证层：处理请求参数
        (new IdValidate())->goCheck();
        // 服务层：处理复杂逻辑
        $server = new server();
        $res = $server->todo();
        $data = [
            'count' => $res
        ];
        return _success($data);
    }

    /**
     * 模拟中途出现错误api接口
     * @author Chenduoduo
     */
    public function errorIndex(){
        // 验证层：处理请求参数
//        (new IdValidate())->goCheck();
        // 服务层：处理复杂逻辑
        $server = new server();
        $res = $server->todoError();
        $data = [
            'count' => $res
        ];
        return _success($data);
    }

}
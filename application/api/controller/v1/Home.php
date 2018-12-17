<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2018/12/17
 * Time: 12:47 PM
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\server\server;
use app\api\validate\IdValidate;

class Home extends BaseController
{
    /**
     * api接口
     * @author Chenduoduo
     */
    public function getHomeData(){
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

}
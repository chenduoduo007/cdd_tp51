<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2018/12/17
 * Time: 12:36 PM
 */

namespace app\api\server;


use app\api\model\user;
use think\Controller;

class server extends Controller
{
    /**
     * 服务层处理
     * @author Chenduoduo
     */
    public function todo(){
//        $user = new user();
//        $res = $user->count();
        $res = 20;
        $data = $this->make($res);
        return $data;
    }

    /**
     * 中间处理
     * @author Chenduoduo
     * @param $res
     */
    private function make($res){
        return $res;
    }

}
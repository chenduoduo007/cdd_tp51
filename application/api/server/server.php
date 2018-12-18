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
     * 模拟中途出现错误
     */
    public function todoError(){
        $error = 1;
        if ($error){
            return _error('系统错误');
        }
        return 'no error';
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
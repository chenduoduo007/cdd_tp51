<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2017/9/13
 * Time: 下午5:49
 */

namespace app\api\behavior;


class CORS
{
    public function appInit(&$params)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token,Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: POST,GET');
        if(request()->isOptions()){
            exit();
        }
    }

}
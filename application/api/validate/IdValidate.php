<?php
/**
 * Created by PhpStorm.
 * User: chenduoduo
 * Date: 2018/12/5
 * Time: 17:30
 */

namespace app\api\validate;


class IdValidate extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
}
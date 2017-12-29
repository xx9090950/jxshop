<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/11/8
 * Time: 20:09
 */

namespace app\API\validate;
//独立验证器,继承自己定义的基础验证器
class IdMustBePositiveInt extends BaseValidate
{
    protected $rule=[
        'id'=>'require|positiveInt'
    ];
    protected $message=[
      'id'=>'id必须为正整数'
    ];

}
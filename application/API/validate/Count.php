<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/27
 * Time: 21:34
 */

namespace app\API\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'positiveInt|between:1,15'
    ];
}
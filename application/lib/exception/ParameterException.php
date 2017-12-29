<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/11/19
 * Time: 11:03
 */

namespace app\lib\exception;

//参数错误异常
class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = 'parameter error';
    public $errorCode = 10002;
}
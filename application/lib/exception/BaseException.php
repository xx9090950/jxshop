<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/11/14
 * Time: 21:57
 */

namespace app\lib\exception;

use think\Exception;

//基础异常类,用于被各种不同的异常继承
class BaseException extends Exception
{
    //默认返回码为400参数错误
    public $code = 400;
    //默认返回信息为参数错误
    public $msg = 'parameter error';
    //默认返回通用错误码
    public $errorCode = 10000;

    //设计构造函数,方便某些异常类需要传入参数修改
    public function __construct($params = [])
    {
        if (!is_array($params) || empty($params)) {
            //如果不是数组或为空,则代表不修改当前的类成员变量,也就是用预设的值来返回给客户端
            return;
        }
        if (key_exists('code', $params)) {
            $this->code = $params['code'];
        }
        if (key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
        if (key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];
        }
    }
}
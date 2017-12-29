<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/11/14
 * Time: 21:59
 */

namespace app\lib\exception;

//没有找到Banner的异常类
class BannerMissException extends BaseException
{
    //返回的状态码
    public $code=404;
    //返回的错误信息
    public $msg='this Banner is not found';
    //返回的错误码
    public $errorCode=40000;
}
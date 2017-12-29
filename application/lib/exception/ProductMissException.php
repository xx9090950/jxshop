<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/27
 * Time: 21:12
 */

namespace app\lib\exception;


class ProductMissException extends BaseException
{
    public $code=404;
    public $message='this product is not found';
    public $errorCode=50000;
}
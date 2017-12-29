<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/25
 * Time: 20:51
 */

namespace app\lib\exception;


class ThemeMissException extends BaseException
{
    public $code=404;
    public $message='Theme is not found';
    public $errorCode='30000';
}
<?php
/**
 * Created by PhpStorm.
 * User: 56sing
 * Date: 2017/12/29
 * Time: 12:44
 */

namespace app\lib\exception;


class CategoryListMissException extends BaseException
{
    public $code=404;
    public $msg='CategoryList is not found';
    public $errorCode=60000;
}
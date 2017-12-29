<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/11/8
 * Time: 21:27
 */

namespace app\API\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //接收参数
        $request = Request::instance();
        //通过param方法获取到所有的参数
        $params = $request->param();
        //由哪个对象来调用goCheck方法,就是由哪个对象来调用check方法,将接收的所有参数传递进去
        $result = $this->check($params);
        if (!$result) {
            //如果结果为false,调用getError方法获取错误信息
            $error = $this->getError();
            //抛出参数错误异常
            throw new ParameterException(['msg' => $error]);
        } else {
            return true;
        }
    }

    /**
     * 判断传入的$value 是否是正整数
     * @param $value
     * @param string $rule
     * @param string $data
     * @param string $field
     * @return bool
     */
    protected function positiveInt($value, $rule = '', $data = '', $field = '')
    {
        //如果是正整数,且大于0
        if (is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 创建对象方法
     * @return mixed
     */
    public static function instance()
    {
        $className = get_called_class();
        return new $className();
    }

}
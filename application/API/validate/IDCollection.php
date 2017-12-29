<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/24
 * Time: 18:00
 */

namespace app\API\validate;

/**
 * ------------------------
 *       ID集合验证器       |
 * ------------------------
 */
class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|idsCheck'
    ];
    protected $message = [
        'ids' => '需要传入一个以逗号分割的id集合'
    ];


    /**
     * 判断是否以逗号分割的字符串传入,且id必须为正整数
     * @param $value
     * @return bool
     */
    protected function idsCheck($value)
    {
        $arrValue = explode(',', $value);
        if (empty($arrValue)) {
            return false;
        }
        foreach ($arrValue as $v) {
            if (!$this->positiveInt($v)) {
                return false;
            }
        }
        return true;
    }
}
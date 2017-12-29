<?php

namespace app\api\model;

class Image extends BaseModel
{
    protected $visible = ['url'];

    /**
     * 读取器,在读取的时候触发,调用基类中的拼接web域名方法
     * @param $value
     * @param $data
     * @return string
     */
    public function getUrlAttr($value, $data)
    {
        return $this->splicingPrefix($value,$data);
    }
}

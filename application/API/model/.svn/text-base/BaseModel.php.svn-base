<?php

namespace app\API\model;

use think\Model;
use think\model\Collection;

class BaseModel extends Model
{
    /**
     * 拼接web域名,根据传入$data中的from判断储存状况.自动返回url
     * @param $value
     * @param $data
     * @return string
     */
    protected function splicingPrefix($value, $data)
    {
        return $data['from'] == 1 ? (config('setting.url_prefix') . $value) : $value;
    }

}

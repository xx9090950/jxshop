<?php

namespace app\API\model;

use app\lib\exception\ProductMissException;

class Product extends BaseModel
{
    protected $hidden=['stock','delete_time','category_id','create_time','update_time','pivot'];
    /**
     * 主图读取器
     * @param $value
     * @param $data
     * @return mixed
     */
    public function getMainImgUrlAttr($value, $data)
    {
        return $this->splicingPrefix($value, $data);
    }

    /**
     * 获取最新$count条商品数据
     * @param $count
     * @return false|\PDOStatement|string|\think\model\Collection
     * @throws ProductMissException
     */
    public static function getRecent($count)
    {
        $listData = self::order('id', 'desc')
            ->limit($count)
            ->select();

        if ($listData->isEmpty()) {
            throw new ProductMissException();
        }
        //调用方法临时隐藏字段
        $listData->hidden(['summary']);

        return $listData;
    }
}

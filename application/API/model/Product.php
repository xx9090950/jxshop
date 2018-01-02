<?php

namespace app\API\model;

use app\lib\exception\ProductMissException;

class Product extends BaseModel
{
    protected $hidden = ['stock', 'delete_time', 'category_id', 'create_time', 'update_time', 'pivot'];

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
        return $listData;
    }

    /**
     * 通过分类id，获取该分类下的商品
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getProductByCategoryId($id)
    {
        $result = self::where(['category_id' => $id])->select();
        return $result;
    }
}

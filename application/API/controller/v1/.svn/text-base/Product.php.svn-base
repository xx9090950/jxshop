<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/27
 * Time: 21:00
 */

namespace app\API\controller\v1;

use app\API\model\Product as ProductModel;
use app\API\validate\Count;
use app\lib\exception\ProductMissException;

class Product
{
    /**
     * @url http://local.jxshop.com/api/newProduct/v1?count=15
     * @param $count integer
     * @return false|\PDOStatement|string|\think\Collection
     * @throws ProductMissException
     */
    public function getNewProductList($count = 15)
    {
        Count::instance()->goCheck();
        return ProductModel::getRecent($count);
    }

}
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
use app\API\validate\IdMustBePositiveInt;

class Product
{
    /**
     * @url http://local.jxshop.com/api/product/v1/new?count=15
     * @http GET
     * @param $count integer
     * @return false|\PDOStatement|string|\think\Collection
     * @throws ProductMissException
     */
    public function getNewProductList($count = 15)
    {
        Count::instance()->goCheck();
        $listData = ProductModel::getRecent($count);
        if ($listData->isEmpty()) {
            throw new ProductMissException();
        }
        //调用方法临时隐藏字段
        $listData->hidden(['summary']);
        return $listData;
    }

    /**
     * @url http:local.jxshop.com/api/product/v1/by_category/id
     * @http GET
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws ProductMissException
     */
    public function getAllInCategory($id)
    {
        IdMustBePositiveInt::instance()->goCheck();
        $products = ProductModel::getProductByCategoryId($id);
        if ($products->isEmpty()) {
            throw new ProductMissException();
        }
        //调用方法临时隐藏字段
        $products->hidden(['summary']);
        return $products;
    }

}
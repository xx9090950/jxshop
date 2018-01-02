<?php
/**
 * Created by PhpStorm.
 * User: 56sing
 * Date: 2017/12/29
 * Time: 11:28
 */

namespace app\API\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryListMissException;


class Category
{
    /**
     * 获取所有分类列表
     * @url http://local.jxshop.com/api/categoryList/v1
     * @http GET
     */
    public function getCategoryList()
    {
        $result=CategoryModel::categoryList();
        if ($result->isEmpty()) {
            throw new CategoryListMissException();
        }
        return $result;
    }



}
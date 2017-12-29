<?php
/**
 * Created by PhpStorm.
 * User: 56sing
 * Date: 2017/12/29
 * Time: 11:28
 */

namespace app\API\controller\v1;

use app\api\model\Category as CategoryModel;

class Category
{
    /**
     * @url http://local.jxshop.com/api/categoryList/v1
     * @http GET
     */
    public function getCategoryList()
    {
        return CategoryModel::categoryList();
    }

}
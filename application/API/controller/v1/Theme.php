<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/24
 * Time: 17:08
 */

namespace app\API\controller\v1;


use app\API\validate\IDCollection;
use app\API\model\Theme as ThemeModel;
use app\API\validate\IdMustBePositiveInt;

class Theme
{
    /**
     * @url local.jxshop.com/api/v1/theme?ids=id1,id2,id3....
     * @param string $ids
     * @return mixed
     */
    public function getSimpleThemeList($ids = '')
    {
        IDCollection::instance()->goCheck();
        return ThemeModel::getThemeByIds($ids);
    }

    /**
     * @url local.jxshop.com/api/v1/theme/id
     * @param $id
     * @return mixed
     */
    public function getThemeDetail($id)
    {
        IdMustBePositiveInt::instance()->goCheck();
        return ThemeModel::getThemeDetailById($id);
    }
}
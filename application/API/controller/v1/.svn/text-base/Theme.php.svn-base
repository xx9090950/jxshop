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
use app\lib\exception\ThemeMissException;

class Theme
{
    /**
     * @url local.jxshop.com/api/theme/v1?ids=id1,id2,id3....
     * @http GET
     * @param string $ids
     * @throws ThemeMissException
     * @return mixed
     */
    public function getSimpleThemeList($ids = '')
    {
        IDCollection::instance()->goCheck();
        $result = ThemeModel::getThemeByIds($ids);
        if (!$result) {
            throw new ThemeMissException();
        }
        return $result;
    }

    /**
     * @url local.jxshop.com/api/theme/v1/id
     * @http GET
     * @param $id
     * @throws ThemeMissException;
     * @return mixed
     */
    public function getThemeDetail($id)
    {
        IdMustBePositiveInt::instance()->goCheck();
        $result = ThemeModel::getThemeDetailById($id);
        if (!$result) {
            throw new ThemeMissException();
        }
        return $result;
    }
}
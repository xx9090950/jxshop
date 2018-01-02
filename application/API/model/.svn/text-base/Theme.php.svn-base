<?php

namespace app\API\model;
//----------------------
//     主题类模型        |
//----------------------
use app\lib\exception\ThemeMissException;

class Theme extends BaseModel
{
    protected $hidden = [
        'update_time', 'delete_time', 'head_img_id', 'toppic_img_id'
    ];
    //关联子表,一对一关系begin
    /*关联首页中的显示的图片*/
    public function toppicImg()
    {
        return $this->belongsTo('Image', 'toppic_img_id', 'id');
    }

    /*关联主题页的头图*/
    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
    //关联子表,一对一关系end
    //关联表,多对多关联begin
    public function product()
    {
        return $this->belongsToMany('Product', 'theme_product', 'product_id', 'theme_id');
    }
    //关联表,多对多关联end

    public static function getThemeDetailById($id)
    {
        $result = self::get($id, ['product', 'headImg']);
        return $result;
    }

    /**
     * 根据ids字符串 ids=id1,id2,id3
     * 获取主题数据
     * @param $ids
     * @throws ThemeMissException
     * @return mixed 包含查询出的对象的数组
     */
    public static function getThemeByIds($ids)
    {
        $arrIds = explode(',', $ids);
        $result = self::with('head_img,toppic_img')->select($arrIds);
        return $result;
    }
}

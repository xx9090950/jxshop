<?php

namespace app\api\model;

class Category extends BaseModel
{
    protected $hidden = [
        'delete_time', 'update_time'
    ];

    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    /**
     * 获取全部分类列表得数据
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function categoryList()
    {
        $result = self::all([], 'topicImg', 1000);
        return $result;
    }
}

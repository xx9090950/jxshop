<?php

namespace app\api\model;

class BannerItem extends BaseModel
{
    protected $visible=['keywords','type','status','image'];
    /**
     * 一对一的关系,关联图片表
     */
    public function image()
    {
        return $this->belongsTo('image','image_id','id');
    }
}

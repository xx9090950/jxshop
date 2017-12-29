<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/11/14
 * Time: 21:46
 */

namespace app\API\model;

use app\lib\exception\BannerMissException;

class Banner extends BaseModel
{
    protected $visible=['id','name','introduce','item'];
    /**
     * 构造一个关联方法,通过外键关联BannerItem模型中的多条数据
     * @return \think\model\relation\HasMany
     */
    public function item()
    {
        return $this->hasMany('BannerItem','banner_id','id');
    }
    /**
     * 查询出某一个banner_id下的所有的轮播图info
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws BannerMissException
     */
    public static function getBannerInfoById($id)
    {
       $banner=self::get($id,['item','item.image'],2000);
        if (!$banner) {
            throw new BannerMissException();
        }
        return $banner;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/10/31
 * Time: 21:40
 */

namespace app\API\controller\v1;

use app\API\model\Banner as BannerModel;
use app\API\validate\IdMustBePositiveInt;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     * @url http://local.jxshop.com/api/v1/banner/1
     * @http GET
     * @param $id integer banner的id
     * @throws BannerMissException
     * @return mixed json格式的banner数据
     */
    public function getBanner($id)
    {
        //实例化id验证器对象并调用上面的goCheck方法,来获取并验证数据
        IdMustBePositiveInt::instance()->goCheck();
        //使用模型上的获取banner数据方法
        $banner=BannerModel::getBannerInfoById($id);
        if (!$banner) {
            throw new BannerMissException();
        }
        return $banner;
    }


}
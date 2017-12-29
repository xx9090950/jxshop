<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\route;

//设置路由,第一个参数为路由值和参数设定,第二个参数为路由所要访问的方法pathInfo的路径
route::get('api/banner/:versions/:id', 'API/:versions.Banner/getBanner');
//获取主题列表路由
route::get('api/theme/:versions', 'API/:versions.Theme/getSimpleThemeList');
//获取主题详情
route::get('api/theme/:versions/:id', 'API/:versions.Theme/getThemeDetail');
//获取最近新品
route::get('api/newProduct/:versions', 'API/:versions.Product/getNewProductList');
//获取全部分类列表
route::get('api/categoryList/:versions', 'API/:versions.Category/getCategoryList');

<?php
/**
 * 微信插件唯一入口文件.
 * @Created by goldenli.
 * @Author: goldenli
 * @Mail fuhao.li@foxmail@qq.com
 * @date : 2017-3-19 14:40:30
 * @Blog: www.lifuhao.cn
 */
//引入配置文件
include_once __DIR__.'/config.php';

Log::wlog(0,'==========[APP START]==========', date('Y-n-j H:m:s'));

//初始化微信类
$wechat = new WeChat(WECHAT_TOKEN, TRUE);

$menuList = array(
            array('id'=>'1', 'pid'=>'0', 'name'=>'顶级分类一', 'type'=>'', 'code'=>''),
            array('id'=>'2', 'pid'=>'1', 'name'=>'分类一子分类一', 'type'=>'click', 'code'=>'lane_wechat_menu_1_1'),
            array('id'=>'3', 'pid'=>'1', 'name'=>'分类一子分类二', 'type'=>'click', 'code'=>'http://www.lanecn.com'),
            array('id'=>'4', 'pid'=>'0', 'name'=>'顶级分类二', 'type'=>'click', 'code'=>'http://www.php.net/'),
            array('id'=>'5', 'pid'=>'0', 'name'=>'顶级分类三', 'type'=>'click', 'code'=>'lane_wechat_menu_3'),
        );
Log::wlog(0,'menu:',json_encode($menuList));
Menu::setMenu($menuList);

/**
 * 测试数据库功能
 */
Mate::getMate(APP, "test");
DBLog::insertLog(APP, 'test_user', 'test_content');


//首次使用需要注视掉下面这1行（27行），并打开最后一行（29行）
echo $wechat->run();
//首次使用需要打开下面这一行（29行），并且注释掉上面1行（27行）。本行用来验证URL
//$wechat->checkSignature();
Log::wlog(0,'==========[APP END]==========', date('Y-n-j H:m:s'));

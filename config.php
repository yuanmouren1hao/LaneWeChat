<?php
// namespace LaneWeChat;
/**
 * 系统主配置文件.
 * @Created by Lane.
 * @Author: lane
 * @Mail lixuan868686@163.com
 * @Date: 14-8-1
 * @Time: 下午1:00
 * @Blog: Http://www.lanecn.com
 */
//版本号
define('LANEWECHAT_VERSION', '1.4');
define('LANEWECHAT_VERSION_DATE', '2014-11-05');

/*
 * 服务器配置，详情请参考@link http://mp.weixin.qq.com/wiki/index.php?title=接入指南
 */
define("WECHAT_URL", 'http://wxfangshangshuiwu.yuanzifu.com/');
define('WECHAT_TOKEN', 'weixin');
define('ENCODING_AES_KEY', "MqAuKoex6FyT5No0OcpRyCicThGs0P1vz4mJ2gwvvkF");

/*
 * 开发者配置
 */
define("WECHAT_APPID", 'wxab6e820cbb26a4c0');
define("WECHAT_APPSECRET", 'eefbf283a81fcf0794c7730914f77577');

/*
 * SAE平台配置
 */
define("HTTP_ACCESSKEY", '04xmzo3zm5');
define("HTTP_APPNAME", 'imcustom4test');


/*
 * 关于日志的参数
 */
define("LOG_FILE_PATH", 'C:\\xampp\\htdocs\\LOG\\wx_fangshangshuiwu\\');
define("LOG_SWITCH", 1);
define("LOG_MAX_LEN", 1024000);
define("rewrite_short_tags", FALSE);


/**
 * 关于DB的参数
 */
define("APP", 'WX_FANGSHANSHUIWU');
define("DB_HOST", '121.40.76.106');
define("DB_USER", 'aoplee');
define("DB_PWD", 'aoplee');
define("DB_NAME_BASE", 'yuanzifu_base');
define("DB_NAME", 'wx_fangshangshuiwu');





//-----引入系统所需类库-------------------
//引入错误消息类
include_once 'core/msg.lib.php';
//引入错误码类
include_once 'core/msgconstant.lib.php';
//引入CURL类
include_once 'core/curl.lib.php';
//判断环境的类库
include_once 'core/environment.lib.php';

//-----------引入微信所需的基本类库----------------
//引入微信处理中心类
include_once 'core/wechat.lib.php';
//引入微信请求处理类
include_once 'core/wechatrequest.lib.php';
//引入微信被动响应处理类
include_once 'core/responsepassive.lib.php';
//引入微信access_token类
include 'core/accesstoken.lib.php';

//-----如果是认证服务号，需要引入以下类--------------
//引入微信权限管理类
include_once 'core/wechatoauth.lib.php';
//引入微信用户/用户组管理类
include_once 'core/usermanage.lib.php';
//引入微信主动相应处理类
include_once 'core/responseinitiative.lib.php';
//引入多媒体管理类
include_once 'core/media.lib.php';
//引入自定义菜单类
include_once 'core/menu.lib.php';


//-----工具类--------------
require '/core/log.lib.php';


//-----数据库类--------------
require  'DB/MYSQL.lib.php';
require  'DB/Mate.lib.php';
require  'DB/Jf.lib.php';
require  'DB/DBLog.lib.php';


?>
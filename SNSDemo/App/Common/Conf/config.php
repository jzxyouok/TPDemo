<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'             =>       'mysql',
     'DB_HOST'             =>       'localhost',
     'DB_NAME'             =>       'sns',
     'DB_USER'             =>       'root',
     'DB_PWD'              =>       '',
     'DB_PORT'             =>       '3306',
     'DB_PREFIX'           =>       'sns_',
     'DB_DEBUG'            =>       TRUE,
    //处于性能考虑，把数据表字段放入缓存里面，下次再访问避免sql语句重复执行获取
    //在变为生产模式时才有效
    'DB_FIELDS_CACHE'     =>       TRUE,//启用字段缓存，
    
    'LANG_SWITCH_ON'        =>      true,        //开启多语言支持开关
    'DEFAULT_LANG'          =>      'zh-cn',    // 默认语言
    'LANG_AUTO_DETECT'      =>      true,    // 自动侦测语言
);
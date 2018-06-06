<?php
return array(
/* 资源URL */
'AssetsBaseURL' => 'http://assets.lunome.kupoy.com/',
# 运营帐号登录密钥
'OperatorAccountLoginKey' => array('secret'=>'bVCYuWUQPPrmh1NURdU5izEimI4pSxRZ','salt'=>'q2PjNk70SvVQLTRk'),
# 前台地址
'FrontendAddress' => 'http://lunome.kupoy.com',
# 服务器状态URL
'ServerStatusUrl' => 'http://admin.suanhetao.com/server-status-j2ak8geyrvgwlq7z9bhbgp3j9n86oqyqewz7bujkztt7q9kmqz0v9ibj0xmm19wz',
# 主账号ID
'SuanhetaoMainAccountId' => '35352fd3b041d52e',
'AdminAccounts' => require dirname(__FILE__).'/Accounts.php',
'suanhetao_data_service' => array(
    'main'    => array('url'=>'http://main.webservice.lunome.kupoy.com','client_id'=>'suanhetao','secret'=>'suanhetao'),
    'account' => array('url'=>'http://account.webservice.lunome.kupoy.com','client_id'=>'suanhetao','secret'=>'suanhetao'),
    'food'    => array('url'=>'http://food.webservice.lunome.kupoy.com','client_id'=>'suanhetao','secret'=>'suanhetao'),
    'sport'   => array('url'=>'http://sport.webservice.lunome.kupoy.com','client_id'=>'suanhetao','secret'=>'suanhetao'),
    'view'    => array('url'=>'http://view.webservice.lunome.kupoy.com','client_id'=>'suanhetao','secret'=>'suanhetao'),
),
);
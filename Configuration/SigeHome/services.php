<?php
use X\Module\Dionysos\Action\Error500;
return array(
'XSession' => array(
    'class' => '\\X\\Service\\XSession\\Service',
    'enable' => true,
    'delay' => false,
    'params' => array(
        'autoStart' => true,
        'holders' => array('cookie', 'get', 'post', 'request'),
        'cookie' => array(
            'lifetime'=>3600,
            'path'=>'/',
            'domain'=>'',
            'secure'=> false,
            'httponly'=>false
        ),
        'storage' => null,
    ),
),
'XAction' => array(
    'class' => '\\X\\Service\\XAction\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(
        'ActionParamName' => 'action',
        //'Error404Handler' => array(Error404::class, 'handle404Error'),
        'CommonViewPath' => 'View',
    ),
),
'XDatabase' => array(
    'class' => '\\X\\Service\\XDatabase\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(
        'databases' => array (
            'management' => array (
                'dsn' => 'mysql:host=localhost;dbname=mysql',
                'username' => 'root',
                'password' => '',
                'charset' => 'UTF8',
            ),
        ),
    ),
),
'Dionysos' => array(
    'class' => '\\X\\Service\\Dionysos\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(),
),

'Account' => array(
    'class' => '\\X\\Service\\Account\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(
        'enableIpInfoRecordingOnload' => false,
    ),
),
    
'Food' => array(
    'class' => '\\X\\Service\\Food\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(),
),

'Sport' => array(
    'class' => '\\X\\Service\\Sport\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(),
),
    
'View' => array(
    'class' => '\\X\\Service\\View\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(),
),
    
'QQConnect' => array(
    'class' => '\\X\\Service\\QQConnect\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(
        'appid' => '101316306',
        'appkey' => '5cab1310e6be7d3fd45f9e9b707b1b89',
        'callback' => 'http://lunome.kupoy.com/tool/QQLoginCallback.html',
    ),
),
'SearchEngine' => array(
    'class' => '\\X\\Service\\SearchEngine\\Service',
    'enable' => true,
    'delay' => true,
    'params' => array(
        'type' => 'Solr',
        'host' => 'localhost',
        'path' => 'solr/sht_content',
        'port' => 8983,
    ),
),
'XMail'=>array (
    'enable' => true,
    'class' => 'X\\Service\\XMail\\Service',
    'delay' => true,
    'params' => array(
        'handlers' => array(
            'errorNotification' => array(
                'handler' => 'smtp',
                'host' => 'smtp.163.com',
                'port' => '25',
                'from' => 'michaelluthor@163.com',
                'from_name' => '酸核桃错误通知',
                'auth_required' => true,
                'username' => 'michaelluthor@163.com',
                'password' => '163mail1215',
            ),
        ),
    ),
),
'XError'=>array (
    'enable' => false,
    'class' => 'X\\Service\\XError\\Service',
    'delay' => false,
    'params' => array(
        'types' => E_ALL,
        'handlers' => array(
            /* => 本地开发不用发邮件
            array(
                'handler' => 'Email',
                'mail_handler' => 'errorNotification',
                'subject' => '酸核桃错误通知',
                'recipients' => array(
                    'NameOfRecipient'=>'568109749@qq.com'
                ),
                'template' => 'default',
                'isHtml' => false,
            ),
            */
            array(
                'handler' => 'Url',
                'url' => '/index.php?mdoule=dionysos&action=error500',
                'parameters' => array(),
                'gotoUrl' => true,
                'method' => 'get',
            ),
        ),
    ),
),
);

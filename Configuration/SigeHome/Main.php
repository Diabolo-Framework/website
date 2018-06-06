<?php
define('X_FRAMEWORK_PATH', 'E:/Projects/028.diabolo/Framework/Framework');
return array(
  'document_root' => 'E:/Projects/029.suanhetao/015.sht.admin/src',
  'module_path' => array(),
  'service_path' => array(
      'E:/Projects/029.suanhetao/009.service.dionysos',
      'E:/Projects/029.suanhetao/010.service.account',
      'E:/Projects/029.suanhetao/011.service.food',
      'E:/Projects/029.suanhetao/012.service.sport',
      'E:/Projects/029.suanhetao/013.service.view',
      'e:Projects/009.suanhetao-service-container',
  ),
  'library_path' => array(
    'E:/Projects/029.suanhetao/004.lib',
  ),
  
  'modules' => require dirname(__FILE__).'/modules.php',
  'services' => require dirname(__FILE__).'/services.php',
  'params' => require dirname(__FILE__).'/params.php',
);
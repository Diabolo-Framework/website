<?php
define('X_FRAMEWORK_PATH', '/home/sht/project-sht/diabolo/program/current');
return array(
  'document_root' => '/home/sht/project-sht/admin/program/current',
  'module_path' => array(),
  'service_path' => array(),
  'library_path' => array(),
  'modules' => require dirname(__FILE__).'/modules.php',
  'services' => require dirname(__FILE__).'/services.php',
  'params' => require dirname(__FILE__).'/params.php',
);

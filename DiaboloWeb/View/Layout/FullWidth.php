<?php 
/** @var $this \X\Service\XAction\Component\WebView\Html */
$this->getMetaManager()->setCharset('UTF-8');

$links = $this->getLinkManager();
$links->addCSS('bootstrap', '/assets/vendor/bootstrap/css/bootstrap.min.css');
$links->addCSS('font-awesome', '/assets/vendor/font-awesome/css/font-awesome.min.css');
$links->addCSS('simple-line-icons', '/assets/vendor/simple-line-icons/css/simple-line-icons.css');
$links->addCSS('new-age', '/assets/css/new-age.min.css');
$links->addCSS('new-age', '/assets/css/new-age.min.css');

$scripts = $this->getScriptManager();
$scripts->add('jquery', '/assets/vendor/jquery/jquery.min.js');
$scripts->add('bootstrap','/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
$scripts->add('jquery.easing','/assets/vendor/jquery-easing/jquery.easing.min.js');
$scripts->add('new-age','/assets/js/new-age.js');
?>
<body id="page-top">
<?php echo $this->getParticleViewManager()->toString(); ?>
</body>
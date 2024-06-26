<?php

namespace member;

require_once dirname(__FILE__) . '/Bootstrap.class.php';

use member\Bootstrap;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
    'cache' => Bootstrap::CACHE_DIR
]);

$template = $twig->loadTemplate('complete.html.twig');
$template->display([]);

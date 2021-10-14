<?php
require_once './views/include/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeController();

// $home->index($_GET['page']);
$pages = ['home'];

if (isset($_GET['page'])) :
    if (in_array($_GET['page'], $pages)) :
        $page = $_GET['page'];
        $home->index($page);
    else :
    endif;
else :
    $home->index('home');
endif;

require_once './views/include/footer.php';

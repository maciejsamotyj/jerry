<?php 

namespace App\Controllers;

use App\Models\Curl;
use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{

    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        $routeToProduct = str_replace('{id}', 1, $routes->get('task')->getPath());

        require_once APP_ROOT . '/views/home.php';
    }

    public function getlist(RouteCollection $routes)
    {
        $curl = new Curl();
        $productList = $curl->getTasks();
        require_once APP_ROOT . '/views/getList.php';
    }
}
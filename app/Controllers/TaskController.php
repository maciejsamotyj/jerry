<?php 

namespace App\Controllers;

use App\Models\Curl;
use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class TaskController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $curl = new Curl();
        $task = $curl->getTask($id);

        require_once APP_ROOT . '/views/task.php';
	}
}
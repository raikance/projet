<?php

namespace App\Controller;

use App\Dao\PlatsDao;

class PlatsController
{
    public function index() {
        $platsDao = new PlatsDao();
        $plats = $platsDao -> getAll();

        require_once implode(DIRECTORY_SEPARATOR, [ROOT, 'view', "plats", "index.html.php"]);
    }
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenuController extends BaseController
{
    public function index()
    {
        // Jika Anda ingin data menu dari database:
        // $menuModel = new \App\Models\MenuModel();
        // $data['menu'] = $menuModel->findAll();

        $data['title'] = 'Menu Kopi Joss';

        return view('menu', $data);
    }
}

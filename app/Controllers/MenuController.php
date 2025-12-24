<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class MenuController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();


        $data['title'] = 'Menu Kopi Joss';

        return view('menu', $data);
    }
}

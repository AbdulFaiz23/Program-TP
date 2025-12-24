<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        $bestSeller = $productModel
            ->orderBy('id', 'ASC')
            ->limit(4)
            ->findAll();

        return view('index', [
            'bestSeller' => $bestSeller
        ]);
    }
}

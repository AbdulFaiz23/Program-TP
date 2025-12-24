<?php

namespace App\Controllers;

class CartController extends BaseController
{
    public function add()
    {
        $session = session();

        $item = [
            'id'    => $this->request->getPost('id'),
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'image' => $this->request->getPost('image'),
            'qty'   => 1,
        ];

        $cart = $session->get('cart') ?? [];

        if (isset($cart[$item['id']])) {
            $cart[$item['id']]['qty']++;
        } else {
            $cart[$item['id']] = $item;
        }

        $session->set('cart', $cart);

        return redirect()->back();
    }

        public function remove($id)
    {
        $cart = session()->get('cart') ?? [];
        unset($cart[$id]);
        session()->set('cart', $cart);
        return redirect()->back();
    }

    public function index()
    {
        $data['cart'] = session()->get('cart') ?? [];
        return view('cart', $data);
    }

    
}

<?php

namespace App\Controllers;

class CartController extends BaseController
{
    public function index()
    {
        $data['cart'] = session()->get('cart') ?? [];
        return view('cart', $data);
    }


    public function add()
{
    $cart = session()->get('cart') ?? [];

    $id = $this->request->getPost('id');

    $cart[$id] = [
        'id'    => $id,
        'name'  => $this->request->getPost('name'),
        'price' => $this->request->getPost('price'),
        'image' => $this->request->getPost('image'),
        'qty'   => isset($cart[$id]) ? $cart[$id]['qty'] + 1 : 1
    ];

    session()->set('cart', $cart);
    return redirect()->to('/cart');
}



    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->set('cart', $cart);
        return redirect()->back();
    }

    public function whatsapp()
{
    $nama   = $this->request->getPost('nama');
    $wa     = $this->request->getPost('wa');
    $alamat = $this->request->getPost('alamat');
    $total  = $this->request->getPost('total');
    $cart   = session()->get('cart');

    $pesan = "Halo, saya ingin memesan:%0A%0A";

    foreach ($cart as $item) {
        $pesan .= "- {$item['name']} ({$item['qty']}x) = Rp " . number_format($item['price'] * $item['qty']) . "%0A";
    }

    $pesan .= "%0A";
    $pesan .= "Total: Rp " . number_format($total) . "%0A%0A";
    $pesan .= "Nama: $nama%0A";
    $pesan .= "Alamat: $alamat";

    $url = "https://wa.me/6285879303449text=" . urlencode($pesan);

    return redirect()->to($url);
}

}

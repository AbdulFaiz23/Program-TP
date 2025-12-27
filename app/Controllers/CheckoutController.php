<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderItemModel;

class CheckoutController extends BaseController
{
    public function index()
    {
        $cart = session()->get('cart');

        if (!$cart || count($cart) == 0) {
            return redirect()->to('/menu');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        return view('checkout', [
            'cart'  => $cart,
            'total' => $total
        ]);
    }

    public function process()
    {
        $cart = session()->get('cart');

        if (!$cart || count($cart) == 0) {
            return redirect()->to('/menu');
        }

        // ================= DATA CUSTOMER =================
        $name    = $this->request->getPost('name');
        $phone   = $this->request->getPost('phone');
        $address = $this->request->getPost('address');

        // ================= HITUNG TOTAL =================
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        // ================= SIMPAN KE DATABASE =================
        $orderModel = new OrderModel();
        $itemModel  = new OrderItemModel();

        $orderId = $orderModel->insert([
            'customer_name' => $name,
            'phone'         => $phone,
            'address'       => $address,
            'total'         => $total
        ]);

        foreach ($cart as $item) {
            $itemModel->insert([
                'order_id' => $orderId,
                'product_name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['qty'],
                'subtotal' => $item['price'] * $item['qty']
            ]);
        }

        // ================= FORMAT PESAN WHATSAPP =================
        $message  = "🛒 *PESANAN BARU*\n\n";
        $message .= "Nama: {$name}\n";
        $message .= "No HP: {$phone}\n";
        $message .= "Alamat: {$address}\n\n";
        $message .= "📦 *Detail Pesanan:*\n";

        foreach ($cart as $item) {
            $message .= "- {$item['name']} ({$item['qty']}x)\n";
            $message .= "  Harga: Rp " . number_format($item['price']) . "\n";
            $message .= "  Gambar: " . base_url($item['image']) . "\n\n";
        }

        $message .= "💰 *Total: Rp " . number_format($total) . "*";

        // ================= WHATSAPP =================
        $waNumber = "6285879303449"; // ganti dengan nomor kamu (tanpa +)
        $encodedMessage = rawurlencode($message);
        $waUrl = "https://api.whatsapp.com/send?phone={$waNumber}&text={$encodedMessage}";

        // Bersihkan keranjang
        session()->remove('cart');

        return redirect()->to($waUrl);
    }
}

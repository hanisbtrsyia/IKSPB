<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        //dd($cartItems);
        return view('belibelah.addtocart', compact('cartItems'));
    }

    public function orderCart()
    {
        $orderItems = \Cart::getContent();
        //dd($cartItems);
        return view('belibelah.membuatpesanan', compact('orderItems'));
    }

    public function thankyouPage($id_order)
    {

        $thanku = Order::find($id_order);
        //dd($id_order);
        return view('belibelah.thankyou',compact('thanku'));
    }


    public function addToCart(Request $request)
    {
        
        \Cart::add([
            'id' => $request->id_produk,          
            'name' => $request->NamaProduk,
            'price' => $request->Harga,                    
            'quantity' => $request->Kuantiti,
            'attributes' => array(
                'image' => $request->GambarProduk,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    //public function showHeaderCart()
    //{
    //    $cartItems = \Cart::getContent();
    //    $ids = $cartItems->pluck('id_produk');
    //    $images = Produk::findMany($ids);
        
    //    return view('.header', compact('cartItems', 'images'));
    //}

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function makeorder(Request $request)
    {
        $request->validate([
            'Emel' => ['required', 'string', 'email', 'max:40'],
            'NoTel' => ['required', 'string', 'max:15'],
            'Postcode' => ['required', 'string', 'min:5' , 'max:5'],
            'NamaPelanggan' => ['required'],
            'Address' => ['required'],
            'City' => ['required'],
       
         ]);

        Order::create([
            'id_order' => $request->id_order,          
            'id_pelanggan'=>Auth::user()->id,  //customer id
            'subtotal' => $request->subtotal,                    
            'Emel' => $request->Emel, 
            'NamaPelanggan' => $request->NamaPelanggan,          
            'NoTel' => $request->NoTel, 
            'Address' => $request->Address,                    
            'Postcode' => $request->Postcode, 
            'City' => $request->City, //customer id
            'District' => $request->District,                    
            'State' => $request->State, //total
            
        ]);
        session()->flash('success', 'Order success! Please confirm payment.');
        return redirect()->route('cart.thankyou', $request->id_order);
        //return redirect()->route('cart.list');
    }


}

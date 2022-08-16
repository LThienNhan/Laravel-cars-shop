<?php

namespace App\Http\Controllers\Site;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getCart()
    {
        return view('site.pages.cart');
    }

    public function update(Request $request, $id)
    {   
        foreach(Cart::getContent() as $item)
        {
            if($item -> id == $id)
            {
                Cart::update($item -> id, [$item-> quantity = $request->input('qty')]);
            }
        }
        return redirect()->back()->with('message', 'Item update successfully.');
    }
    
    public function removeItem($id)
    {
        echo $id;
        Cart::remove($id);
        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully.');
    }

    public function clearCart()
    {
        Cart::clear();
        return redirect('/');
    }
}
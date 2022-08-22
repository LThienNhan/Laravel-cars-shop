<?php

namespace App\Http\Controllers\Site;

use Cart;
use DB;
use Auth;
use App\Models\User;
use App\Models\Carts;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function getCheckoutDB($id)
    {
        $total = 0;
        $quantity = 0;
        $items = CartItem::select()->where('user_id',$id)->get();
        foreach($items as $item) {
            $total += $item->grand_total;
            $quantity += $item->quantity;
        }
        return view('site.pages.checkout', compact('total', 'quantity'));
    }

    public function placeOrder(Request $request)
    {
      
        
        if ($request->input('total') != 0) {
            if ($request->input('payment_method_cod') == null && $request->input('payment_method_bank') == 'null') {
                return redirect()->back()->with('error', 'Please choose a payment method');
            } 
            if ($request->input('payment_method_cod') != null && $request->input('payment_method_bank') != 'null') {
                return redirect()->back()->with('error', 'Can not choose 2 payment methods on 1 bill');
            }
            $orderDB = $this->orderRepository->storeOrderDetailsDB($request->all());
        } else {
            if ($request->input('payment_method_cod') == null && $request->input('payment_method_bank') == 'null') {
                return redirect()->back()->with('error', 'Please choose a payment method');
            } 
            if ($request->input('payment_method_cod') != null && $request->input('payment_method_bank') != 'null') {
                return redirect()->back()->with('error', 'Can not choose 2 payment methods on 1 bill');
            }
            if ($request->input('payment_method_bank') != 'null') {
                $this->validate($request, [
                    'card_number'      =>  'required|min:9 |max: 14',
                    'payment_method_bank'     =>  'required'
                ]);
            }
        
            $order = $this->orderRepository->storeOrderDetails($request->all());
        }
        return redirect('/');
    }
}
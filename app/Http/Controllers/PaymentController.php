<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use PrevailExcel\Nowpayments\Facades\Nowpayments;

class PaymentController extends Controller
{

    /**
     * Collect Order data and create Payment
     * @return Url
     */
    public function createCryptoPayment()
    {
        try{
            $data = [
                'price_amount' => request()->price_amount ?? 100,
                'price_currency' => request()->price_currency ?? 'usd',
                'order_id' => request()->order_id ?? uniqid(), // you can generate your order id as you wish
                'pay_currency' => request()->pay_currency ?? 'btc',
                'payout_currency' => request()->payout_currency ?? 'btc',
            ];

           $paymentDetails = Nowpayments::createPayment($data);
            
            dd($paymentDetails);
            // Now you have the payment details,
            // you can then redirect or do whatever you want

            return Redirect::back()->with(['msg'=>"Payment created successfully", 'type'=>'success'], 'data'=>$paymentDetails);
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>"There's an error in the data", 'type'=>'error']);
        }        
    }
}

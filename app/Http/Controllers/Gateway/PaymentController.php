<?php

namespace App\Http\Controllers\Gateway;

use App\Models\Gateway;
use App\Http\Controllers\Controller;
use PrevailExcel\Nowpayments\Currency;
use PrevailExcel\Nowpayments\Facades\Nowpayments;

class PaymentController extends Controller
{
    
    public function deposit()
    {
        $data = [
            'price_amount' => request()->price_amount ?? 3000,
            'price_currency' => request()->price_currency ?? 'USDTBSC',
            'pay_amount' => request()->pay_amount ?? null,
            'pay_currency' => request()->pay_currency ?? Currency::USDTBEP20,
            'customer_email' => 'sumonmti498@gmail.com',
            'order_id' => request()->order_id ?? uniqid(),
            'order_description' => request()->order_description ?? null,
            // "burning_percent" => 0.01,
            // "time_limit" => 5,
            'order_id' => uniqid('ORDER_'),
            'purchase_id' => request()->purchase_id ?? null,
            'payout_address' => request()->payout_address ?? 0,
            'payout_currency' => request()->payout_currency ?? 0,
            'payout_extra_id' => request()->payout_extra_id ?? null,
            'fixed_rate' => request()->fixed_rate ?? true,
            "is_fee_paid_by_user" => true
        ];
        // $gateway = Gateway::orderBy("gateway_parameters->paypal_email->title")->get();
        // $gateway = Gateway::where('gateway_parameters->title','A')->get();
        //$gateway = Gateway::whereJsonContains('gateway_parameters->title','A')->get();
        //return $gateway;
        dd(Nowpayments::createPayment($data));
        // dd(Nowpayments::createPlan());
        // dd(Nowpayments::getCurrencies());
    }
    public function create()
    {
        // $gateway = Gateway::where('id',4)->update([
        //     'gateway_parameters->title' => 'Sumon'
        // ]);
        $gateway = Gateway::find(4);
        $gateway['gateway_parameters']['title'] = 'Saharukh Khan';
        $gateway->save();

        // $gateway = Gateway::create([
        //     'form_id'=>1,
        //     'code'=>1,
        //     'name'=>'Aaster Card',
        //     'alias'=>'Master Card',
        //     'status'=> 1,
        //     'gateway_parameters'=>[
        //         'title'=> "A",
        //         "global" => true,
        //         "value" => "sb-owud61543012@business.example.com"
        //     ],
        //     'supported_currencies'=>[
        //         "AUD"=> "AUD",
        //         "BRL"=> "BRL",
        //         "CAD"=> "CAD",
        //         "CZK"=> "CZK",
        //         "DKK"=> "DKK"
        //     ],
        //     'crypto'=>0,
        //     'extra'=>null,
        //     'description'=>'NULL'
        // ]);
        return response()->json([
            'status'=>true,
            'message'=>'Successfully Inserted',
            'token'=>$gateway,
            'token_type'=>'bearer'
        ],200);
        // $gateway = new Gateway();
        // $gateway->form_id = 1;
        // $gateway->code = 101;
        // $gateway->name = "Paypal";
        // $gateway->alias = 'Paypal';
        // $gateway->status = 1;
        // $gateway->gateway_parameters = [
        //     'paypal_email'=> [
        //         'title'=> "PayPal Email",
        //         "global" => true,
        //         "value" => "sb-owud61543012@business.example.com"
        //     ]
        // ];
        // $gateway->supported_currencies = [
        //     "AUD"=> "AUD",
        //     "BRL"=> "BRL",
        //     "CAD"=> "CAD",
        //     "CZK"=> "CZK",
        //     "DKK"=> "DKK"
        // ];
        // $gateway->crypto = 0;
        // $gateway->extra = null;
        // $gateway->description = "NULL";
        // $gateway->created_at = Carbon::now();
        // $gateway->updated_at = Carbon::now();
        // $gateway->save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Payment;

class FkController extends Controller
{
    public function result(Request $request)
    {
        $merchant_id = config('app.fk_merchant_id');
        $merchant_secret = config('app.fk_secret2');

        //Log::info('IP: '. $request->getClientIp());
        //Log::info('REQUEST', print_r($request->all()));
        //Log::info('MERCHANT_ID: '. $merchant_id);
        //Log::info('SECRET2: '. $merchant_secret);

        if (!in_array($request->getClientIp(), array('136.243.38.147', '136.243.38.149', '136.243.38.150', '136.243.38.151', '136.243.38.189', '88.198.88.98'))) {
            die("hacking attempt!");
        }

        $sign = md5($merchant_id.':' . $request->AMOUNT .':'.$merchant_secret.':' . $request->MERCHANT_ORDER_ID);

        if ($sign != $request->SIGN) {
            die('wrong sign');
        }

        $user = User::where('login', $request->MERCHANT_ORDER_ID)->first();
        if (!$user) {
            die('Not found user');
        }

        $payment = Payment::where('intid', $request->intid)->first();
        if ($payment) {
            die('YES');
        }

        // обновление баланса
        $user->amount = $user->amount + $request->AMOUNT;
        $user->save();

        Payment::create([
            'login' => $request->MERCHANT_ORDER_ID,
            'intid' => $request->intid,
            'amount' => $request->AMOUNT
        ]);

        die('YES');
    }
}

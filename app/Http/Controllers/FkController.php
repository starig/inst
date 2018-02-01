<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FkController extends Controller
{
    public function result(Request $request)
    {
        $merchant_id = config('app.fk_merchant_id');
        $merchant_secret = config('app.fk_secret2');

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

        // обновление баланса
        $user->amount = $user->amount + $request->AMOUNT;
        $user->save();

        die('YES');
    }
}

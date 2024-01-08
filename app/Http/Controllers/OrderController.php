<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Orders\Order;
use App\Orders\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function processOrder(Order $order)
    {
        return $order->process();
    }
}

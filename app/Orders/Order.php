<?php

    namespace App\Orders;
    use App\Billing\PaymentGateway;
    use App\Billing\PaymentGatewayContract;

    class Order
    {
        private $paymentGateway;

        public function __construct(PaymentGatewayContract $paymentGateway)
        {
            $this->paymentGateway = $paymentGateway;
        }

        public function process()
        {
            $this->paymentGateway->setDiscount(500);

            return $this->paymentGateway->charge(1000);
        }
    }

?>
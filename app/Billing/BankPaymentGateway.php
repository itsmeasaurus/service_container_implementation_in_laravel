<?php

    namespace App\Billing;
    use Illuminate\Support\Str;

    class BankPaymentGateway implements PaymentGatewayContract
    {
        private $currency;
        private $discount;

        public function __construct($currency)
        {
            $this->currency = $currency;
            $this->discount = 0;
        }

        public function setDiscount($amount)
        {
            $this->discount = $amount;
        }

        public function charge($amount)
        {
            return [
                'confirmation_number' => Str::random(),
                'currency' => $this->currency,
                'initial_amount' => $amount,
                'discount' => $this->discount,
                'total_amount' => $amount - $this->discount,
            ];
        }
    }

?>
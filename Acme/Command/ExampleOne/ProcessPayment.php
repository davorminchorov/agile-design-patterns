<?php


class ProcessPayment {

    public function processUserPayment($userName)
    {
        $user = new User($userName);

        $paymentMethod = $user->getPaymentMethod();

        $this->executePayment($paymentMethod);

    }

    private function executePayment(PaymentMethodInterface $paymentMethod)
    {
        try {
            $paymentMethod->execute();

        } catch (Exception $e) {
            throw new PaymentMethodProcessingException(
                'Paying with ' . $paymentMethod . ' has failed with error: ' . $e->getMessage()
            );
        }
    }

}
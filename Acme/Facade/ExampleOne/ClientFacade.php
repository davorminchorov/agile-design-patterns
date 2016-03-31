<?php


class ClientFacade {

    public function getAllClientData($clientId)
    {
        return array(
            $cliendId,
            $this->clientAddress($clientId),
            $this->getMostPayedFor($clientId),
            $this->getPaymentHistory($clientId)
        );
    }

    private function clientAddress($clientId)
    {
        $clientShippingAddress = '';
        $clientPersonalData = new ClientPersonalData($clientId);
        $this->clientData->address = $clientPersonalData->getAddress();
        $this->clientData->address .= $clientPersonalData->getCountry();
        $this->clientData->address .= $clientPersonalData->getPostalCode();

        return $clientShippingAddress;
    }

    private function getMostPayedFor($clientId)
    {
        $paymentHistory = new PaymentHistory();
        return $paymentHistory->findPaymentsForClient($clientId);

    }

    private function getPaymentHistory($clientId)
    {

        $topPayments = new TopPayments();
        $this->clientData->topPayment = $topPayments->findMaxForClientWithId($clientId);

    }
}
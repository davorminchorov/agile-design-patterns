<?php


class Statistics {

    private $clientData;
    private $facade;

    function __construct(ClientFacade $facade)
    {
        $this->clientData = new ClientData();
        $this->facade = new ClientFacade();
    }


    public function loadAllClientStats($clientId)
    {
        $allClientData = $this->facade->getAllClientData($clientId);

        $this->clientData->id = $allClientData[0];
        $this->clientData->address = $allClientData[1];
        $this->clientData->mostPayedFor = $allClientData[2];
        $this->clientData->userHistory = $allClientData[3];
    }
}
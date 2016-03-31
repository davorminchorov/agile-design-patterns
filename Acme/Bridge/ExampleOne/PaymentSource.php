<?php


interface PaymentSource {

    public function send();
    public function approve();
}
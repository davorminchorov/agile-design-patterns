<?php

namespace Acme\Decorator\ExampleOne;

class HtmlPaymentDetails extends PaymentDecorator {


    public function getHtmlDescription()
    {
        // With <html> tags
        return $this->itsPaymentMethod->getDescription();
    }

}
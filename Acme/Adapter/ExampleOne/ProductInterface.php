<?php

namespace Acme\Adapter\ExampleOne;

interface ProductInterface {

   public function getDescription();
   public function getPrice();
   public function getPicture();
   public function sell();
}
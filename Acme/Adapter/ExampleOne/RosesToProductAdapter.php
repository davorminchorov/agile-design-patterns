<?php


class RosesToProductAdapter implements \Acme\Adapter\ExampleOne\ProductInterface {

    private $rose;

    function __construct(TheOldRosesInterface $rose)
    {
        $this->rose = $rose;
    }


    public function getDescription()
    {
        return 'Nice Flowers!';
    }

    public function getPrice()
    {
        return $this->rose->showImage();
    }

    public function getPicture()
    {
        return $this->rose->getPriceFromDatabase();
    }

    public function sell()
    {
        return $this->rose->sell();
    }
}
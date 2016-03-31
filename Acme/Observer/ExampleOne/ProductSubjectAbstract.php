<?php


abstract class ProductSubjectAbstract {

    private $observers = array();

    public function register(ProductObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    protected function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->update();
        }
    }
}
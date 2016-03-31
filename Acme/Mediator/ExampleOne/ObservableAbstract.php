<?php


abstract class ObservableAbstract {
    
    private $observers = array();

    public function register($observer)
    {
        $this->observers[] = $observer;
    }

    protected function notify($hint)
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($hint);
        }

    }
}
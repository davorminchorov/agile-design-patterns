<?php


class MultiFileUploader {

    private $uploaders = array();

    public function addUploader(UploaderCommand $uploaders)
    {
        $this->$uploaders[] = $uploader;
    }

    public function run()
    {
        while (!empty($this->uploaders))
        {
            $uploader = array_shift($this->uploaders);
            $uploader->execute();

        }

    }
}
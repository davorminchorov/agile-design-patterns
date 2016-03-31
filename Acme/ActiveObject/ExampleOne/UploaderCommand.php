<?php


class UploaderCommand {

    private $size;
    private $chunk;
    private $uploaded;
    private $multiFileUploader;

    function __construct($size, $speed, MultiFileUploader $multiFileUploader)
    {
        $this->size = $size;
        $this->chunk = $size / $speed;
        $this->multiFileUploader = $multiFileUploader;
    }

    public function execute()
    {
        $this->uploaded += $this->chunk;

        if ($this->uploaded < $this->size)
        {
            $this->multiUploader->addUploader($this);
        }
    }
}
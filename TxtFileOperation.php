<?php

class TxtFileOperation implements DataOperation
{
    private $urlFile;

    public function __construct(string $urlFile)
    {
        $this->urlFile = $urlFile;
    }

    public function parseData()
    {
        return file($this->urlFile);
    }
}
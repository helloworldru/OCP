<?php

class JsonFileOperation implements DataOperation
{
    private $urlFile;

    public function __construct(string $urlFile)
    {
        $this->urlFile = $urlFile;
    }

    public function parseData()
    {
        $tmp = file_get_contents($this->urlFile);
        return json_decode($tmp, true);
    }
}
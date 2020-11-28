<?php

class Interaction
{
    public function getData(DataOperation $operation)
    {
        if (null == $operation) {
            throw new InvalidArgumentException('Can not perform operation');
        }
        return $operation->parseData();
    }
}
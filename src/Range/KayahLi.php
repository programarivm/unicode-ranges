<?php

namespace UnicodeRanges\Range;

class KayahLi extends RangeAbstract
{
    const RANGE_NAME = 'Kayah Li';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A900',
            'A92F',
        ];
    }
}

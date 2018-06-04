<?php

namespace UnicodeRanges\Range;

class YijingHexagramSymbols extends RangeAbstract
{
    const RANGE_NAME = 'YijingHexagram Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '4DC0',
            '4DFF',
        ];
    }
}

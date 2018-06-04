<?php

namespace UnicodeCharacterRanges\Range;

class Sinhala extends RangeAbstract
{
    const RANGE_NAME = 'Sinhala';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0D80',
            '0DFF',
        ];
    }
}
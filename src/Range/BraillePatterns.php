<?php

namespace UnicodeRanges\Range;

class BraillePatterns extends RangeAbstract
{
    const RANGE_NAME = 'Braille Patterns';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2800',
            '28FF',
        ];
    }
}

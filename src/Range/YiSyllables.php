<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class YiSyllables extends AbstractRange
{
    const RANGE_NAME = 'Yi Syllables';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A000',
            'A48F',
        ];
    }
}

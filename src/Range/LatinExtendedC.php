<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LatinExtendedC extends AbstractRange
{
    const RANGE_NAME = 'Latin Extended-C';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2C60',
            '2C7F',
        ];
    }
}

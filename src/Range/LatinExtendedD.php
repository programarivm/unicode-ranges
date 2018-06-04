<?php

namespace UnicodeRanges\Range;

class LatinExtendedD extends RangeAbstract
{
    const RANGE_NAME = 'Latin Extended-D';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A720',
            'A7FF',
        ];
    }
}

<?php

namespace UnicodeCharacterRanges\Range;

class Tibetan extends RangeAbstract
{
    const RANGE_NAME = 'Tibetan';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0F00',
            '0FFF',
        ];
    }
}
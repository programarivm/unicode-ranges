<?php

namespace UnicodeCharacterRanges;

class SupplementalArrowsA extends CharacterRange
{
    const RANGE_NAME = 'Supplemental Arrows-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '27F0',
            '27FF',
        ],
            'dec' => [
            10224,
            10239,
        ],
        ];
    }
}

<?php

namespace UnicodeCharacterRanges;

class LatinExtendedAdditional extends CharacterRange
{
    const RANGE_NAME = 'Latin Extended Additional';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'hex' => [
            '1E00',
            '1EFF',
        ],
            'dec' => [
            7680,
            7935,
        ],
        ];
    }
}

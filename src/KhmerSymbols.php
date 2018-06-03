<?php

namespace UnicodeCharacterRanges;

class KhmerSymbols extends CharacterRange
{
    const RANGE_NAME = 'Khmer Symbols';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '19E0',
            '19FF',
        ];
    }
}

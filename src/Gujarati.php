<?php

namespace UnicodeCharacterRanges;

class Gujarati extends CharacterRange
{
    const RANGE_NAME = 'Gujarati';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0A80',
            '0AFF',
        ];
    }
}

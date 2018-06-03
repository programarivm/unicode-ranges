<?php

namespace UnicodeCharacterRanges;

class Bengali extends CharacterRange
{
    const RANGE_NAME = 'Bengali';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0980',
            '09FF',
        ];
    }
}

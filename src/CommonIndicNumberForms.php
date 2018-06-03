<?php

namespace UnicodeCharacterRanges;

class CommonIndicNumberForms extends CharacterRange
{
    const RANGE_NAME = 'Common Indic Number Forms';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A830',
            'A83F',
        ];
    }
}
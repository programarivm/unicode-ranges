<?php

namespace UnicodeCharacterRanges;

class ArabicExtendedA extends CharacterRange
{
    const RANGE_NAME = 'Arabic Extended-A';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '08A0',
            '08FF',        
        ];
    }
}

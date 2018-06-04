<?php

namespace UnicodeRanges\Range;

class GeometricShapes extends RangeAbstract
{
    const RANGE_NAME = 'Geometric Shapes';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '25A0',
            '25FF',
        ];
    }
}

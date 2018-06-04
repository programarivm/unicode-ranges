<?php

namespace UnicodeRanges\Range;

class BassaVah extends RangeAbstract
{
	const RANGE_NAME = 'Bassa Vah';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16AD0',
			'16AFF',
		];
	}
}

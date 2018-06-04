<?php

namespace UnicodeRanges\Range;

class AncientSymbols extends RangeAbstract
{
	const RANGE_NAME = 'Ancient Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10190',
			'101CF',
		];
	}
}

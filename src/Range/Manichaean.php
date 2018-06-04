<?php

namespace UnicodeCharacterRanges\Range;

class Manichaean extends RangeAbstract
{
	const RANGE_NAME = 'Manichaean';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10AC0',
			'10AFF',
		];
	}
}
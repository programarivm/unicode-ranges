<?php

namespace UnicodeCharacterRanges;

class ByzantineMusicalSymbols extends CharacterRange
{
	const RANGE_NAME = 'Byzantine Musical Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D000',
			'1D0FF',
		];
	}
}

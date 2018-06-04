<?php

namespace UnicodeCharacterRanges;

class Lycian extends CharacterRange
{
	const RANGE_NAME = 'Lycian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10280',
			'1029F',
		];
	}
}

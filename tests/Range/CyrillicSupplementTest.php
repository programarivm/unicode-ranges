<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CyrillicSupplement;

class CyrillicSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CyrillicSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0500', $range[0]);
		$this->assertEquals('052F', $range[1]);
	}
}
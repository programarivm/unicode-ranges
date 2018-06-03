<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Hebrew;

class HebrewTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Hebrew;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Hebrew', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0590', $range['hex'][0]);
		$this->assertEquals('05FF', $range['hex'][1]);
		$this->assertEquals(1424, $range['dec'][0]);
		$this->assertEquals(1535, $range['dec'][1]);
	}
}

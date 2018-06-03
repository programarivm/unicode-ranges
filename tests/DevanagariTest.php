<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Devanagari;

class DevanagariTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Devanagari;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Devanagari', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0900', $range['hex'][0]);
		$this->assertEquals('097F', $range['hex'][1]);
		$this->assertEquals(2304, $range['dec'][0]);
		$this->assertEquals(2431, $range['dec'][1]);
	}
}

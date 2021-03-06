<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CountingRodNumerals;

class CountingRodNumeralsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CountingRodNumerals;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Counting Rod Numerals', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D360', $range[0]);
		$this->assertEquals('1D37F', $range[1]);
	}
}

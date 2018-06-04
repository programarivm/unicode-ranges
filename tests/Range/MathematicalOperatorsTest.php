<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MathematicalOperators;

class MathematicalOperatorsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MathematicalOperators;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mathematical Operators', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2200', $range[0]);
		$this->assertEquals('22FF', $range[1]);
	}
}
<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LatinExtendedAdditional;

class LatinExtendedAdditionalTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LatinExtendedAdditional;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Latin Extended Additional', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1E00', $range['hex'][0]);
		$this->assertEquals('1EFF', $range['hex'][1]);
		$this->assertEquals(7680, $range['dec'][0]);
		$this->assertEquals(7935, $range['dec'][1]);
	}
}

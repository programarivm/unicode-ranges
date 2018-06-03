<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LatinExtendedA;

class LatinExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LatinExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Latin Extended-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0100', $range['hex'][0]);
		$this->assertEquals('017F', $range['hex'][1]);
		$this->assertEquals(256, $range['dec'][0]);
		$this->assertEquals(383, $range['dec'][1]);
	}
}

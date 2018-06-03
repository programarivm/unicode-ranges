<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Lao;

class LaoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lao;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lao', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0E80', $range['hex'][0]);
		$this->assertEquals('0EFF', $range['hex'][1]);
		$this->assertEquals(3712, $range['dec'][0]);
		$this->assertEquals(3839, $range['dec'][1]);
	}
}

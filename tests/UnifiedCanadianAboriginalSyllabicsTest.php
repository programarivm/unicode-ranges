<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\UnifiedCanadianAboriginalSyllabics;

class UnifiedCanadianAboriginalSyllabicsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new UnifiedCanadianAboriginalSyllabics;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Unified Canadian Aboriginal Syllabics', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1400', $range['hex'][0]);
		$this->assertEquals('167F', $range['hex'][1]);
		$this->assertEquals(5120, $range['dec'][0]);
		$this->assertEquals(5759, $range['dec'][1]);
	}
}

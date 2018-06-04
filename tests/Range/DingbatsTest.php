<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Dingbats;

class DingbatsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Dingbats;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Dingbats', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2700', $range[0]);
		$this->assertEquals('27BF', $range[1]);
	}
}

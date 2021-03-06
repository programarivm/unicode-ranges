<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Sharada;

class SharadaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Sharada;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sharada', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11180', $range[0]);
		$this->assertEquals('111DF', $range[1]);
	}
}

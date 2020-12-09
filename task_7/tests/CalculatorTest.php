<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
		self::assertEquals(0, $calculator->add(-2, 2));
	}
	public function testSubtract(): void
	{
		$calculator = new Calculator();
		self::assertEquals(0, $calculator->subtract(2, 2));
		self::assertEquals(-4, $calculator->subtract(-2, 2));
	}
	public function testDivide(): void
	{
		$calculator = new Calculator();
		self::assertEquals(1, $calculator->divide(2, 2));
		self::assertEquals(-1, $calculator->divide(-2, 2));
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage("Divider cant be a zero");
		$calculator->divide(2, 0);
	}
	public function testExponentiation(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->exponentiation(2, 2));
		self::assertEquals(8, $calculator->exponentiation(2, 3));
	}
	public function testSquareRoot(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2, $calculator->squareRoot(4));
		self::assertEquals(3, $calculator->squareRoot(9));
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage("Argument cannot be negative");
		$calculator->squareRoot(-3);
	}
}

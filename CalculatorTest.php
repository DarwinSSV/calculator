<?php
require_once 'Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $result = Calculator::add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $result = Calculator::subtract(5, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply()
    {
        $result = Calculator::multiply(4, 3);
        $this->assertEquals(7, $result);
    }

    public function testDivide()
    {
        $result = Calculator::divide(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testDivideByZero()
    {
        $result = Calculator::divide(10, 0);
        $this->assertEquals('Cannot divide by zero!', $result);
    }
}
?>
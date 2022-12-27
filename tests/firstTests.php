<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class firstTests extends TestCase
{
    public function testCanEcho(): void
    {
        $message = "Foo Bar Bazz";
        echo($message);
        $this->expectOutputString("Fizz Buzz");
    }

    public function testTrue(): void
    {
        $this->assertTrue(true);
    }

    public function testFalse(): void
    {
        $this->assertTrue(true);
    }

    public function testPushAndPop(): void
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));

    }
}
<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{

    private Counter $counter;
    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Belajar Counter" . PHP_EOL;
    }

    public  function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("TODO do counter again");
    }


    public function testCounter()
    {

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(3, $this->counter->getCounter());
    }
    /**
     * @test
     */
    public function increment()
    {
        self::markTestSkipped("masih ada yg erroe bosku");
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }

    public function tearDown(): void
    {
        echo "TearDown" . PHP_EOL;
    }

    /**
     * @after
     */
    public function after(): void
    {
        echo "after" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Darwin
     */
    public function testOnlyWindows()
    {
        self::assertTrue(true, "Only in Windows");
    }
}

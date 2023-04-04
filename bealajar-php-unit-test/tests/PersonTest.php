<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    protected function setUp(): void
    {
    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Eko");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Budi, my name is Eko", $this->person->sayHello("Budi"));
    }

    // Harus GaGal
    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good Bye Budi" . PHP_EOL);
        $this->person->sayGoodBye("Budi");
    }
}

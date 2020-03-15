<?php

use App\AbstractPerson;
use App\Doctor;
use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleIsReturned(){

        $doctor = new Doctor('Baker');

        $this->assertEquals('Dr. Baker', $doctor->getNameAndTitle());
    }

    public function testNameAndTitleIncludesValueFromGetTitle(){
        $mock = $this->getMockBuilder(AbstractPerson::class)
                     ->setConstructorArgs(['Bichotte Baker'])
                     ->getMockForAbstractClass();

        $mock->method('getTitle')
            ->willReturn('Mr .');

        $this->assertEquals('Mr . Bichotte Baker', $mock->getNameAndTitle());
    }
}
<?php

use App\Mailer;
use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    public function testSendMessageReturnsTrue(){
        $this->assertTrue(Mailer::send('aurel.bichop@laposte.net','Hello my love !'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        Mailer::send('','');
    }
}
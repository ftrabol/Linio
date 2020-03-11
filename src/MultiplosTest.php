<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class MultiplosTest extends TestCase
{
    public function testReturnArrayMultiplos(): void
    {
     $execute = $this->getMockBuilder('\Multiplos')
        ->setMethods(array('__construct'))
        ->setConstructorArgs(array(3,5))
        ->getMock();
        $result   = $execute->printMessage();
        $this->assertIsArray($result);
    }
}
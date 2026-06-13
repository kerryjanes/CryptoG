<?php
/**
 * Tests for CryptoG
 */

use PHPUnit\Framework\TestCase;
use Cryptog\Cryptog;

class CryptogTest extends TestCase {
    private Cryptog $instance;

    protected function setUp(): void {
        $this->instance = new Cryptog(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptog::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

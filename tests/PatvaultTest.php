<?php
/**
 * Tests for PatVault
 */

use PHPUnit\Framework\TestCase;
use Patvault\Patvault;

class PatvaultTest extends TestCase {
    private Patvault $instance;

    protected function setUp(): void {
        $this->instance = new Patvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Patvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

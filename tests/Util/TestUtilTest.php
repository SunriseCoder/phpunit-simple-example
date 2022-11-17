<?php

namespace App\Tests\Util;

use App\Util\TestUtil;
use PHPUnit\Framework\TestCase;

class TestUtilTest extends TestCase
{
    private TestUtil $instance;
    protected function setUp(): void
    {
        $this->instance = new TestUtil();
    }

    public function testGetTrue(): void {
        $actual = $this->instance->getTrue();
        $this->assertTrue($actual);
    }
}

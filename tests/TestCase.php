<?php

namespace Spatie\LaravelPackageTools\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public static $latestResponse;

    protected function setUp(): void
    {
        parent::setUp();
    }
}

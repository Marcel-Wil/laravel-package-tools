<?php

namespace Spatie\LaravelPackageTools\Tests;

use Illuminate\Testing\TestResponse;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public static $latestResponse;

    protected function setUp(): void
    {
        parent::setUp();
    }
}

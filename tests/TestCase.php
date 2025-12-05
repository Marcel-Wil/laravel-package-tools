<?php

namespace Spatie\LaravelPackageTools\Tests;

use Illuminate\Testing\TestResponse;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public static ?TestResponse $latestResponse = null;

    protected function setUp(): void
    {
        parent::setUp();
    }
}

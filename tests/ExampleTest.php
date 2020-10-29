<?php

namespace Creativeorange\LaravelTranslatableAndInjectable\Tests;

use Orchestra\Testbench\TestCase;
use Creativeorange\LaravelTranslatableAndInjectable\LaravelTranslatableAndInjectableServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTranslatableAndInjectableServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

<?php

namespace Tests;

use Illuminate\Foundation\Testing\WithFaker;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

abstract class BrowserKitTestCase extends BaseTestCase
{
    use CreatesApplication, CreatesUsers;

    public $baseUrl = 'https://afcffuta.test';

    protected function setUpTraits()
    {
        $uses = parent::setUpTraits();
        if (isset($uses[WithFaker::class])) {
            $this->setUpFaker();
        }
        return $uses;
    }
    
    protected function dispatch($job)
    {
        return $job->handle();
    }
}
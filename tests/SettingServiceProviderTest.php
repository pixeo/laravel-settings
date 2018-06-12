<?php

namespace Pixeo\Settings\Tests;

use Pixeo\Settings\Setting;

class SettingServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_retrieve_settings()
    {
        Setting::create(['key' => 'foo', 'value' => 'bar']);

        $this->assertEquals($this->app['settings'], collect(['foo' => 'bar']));
        $this->assertEquals(setting('foo'), 'bar');
    }
}
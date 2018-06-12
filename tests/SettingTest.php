<?php

namespace Pixeo\Settings\Tests;

use Pixeo\Settings\Setting;

class SettingTest extends TestCase
{
    /** @test */
    public function it_can_create_settings()
    {
        Setting::create(['key' => 'foo', 'value' => 'bar']);

        $setting = Setting::byKey('foo');

        $this->assertInstanceOf(Setting::class, $setting);
        $this->assertEquals('foo', $setting->key);
        $this->assertEquals('bar', $setting->value);
    }
}
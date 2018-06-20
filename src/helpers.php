<?php

if (! function_exists('setting')) {
    /**
     * @return \Pixeo\Settings\Setting
     */
    function setting($key, $default = null)
    {
        return data_get(app('settings'), $key, $default);
    }
}

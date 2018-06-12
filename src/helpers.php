<?php

if (! function_exists('setting')) {
    /**
     * @return \Pixeo\Settings\Setting
     */
    function setting($key)
    {
        return data_get(app('settings'), $key);
    }
}

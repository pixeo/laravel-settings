<?php

namespace Pixeo\Settings;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * @param $value
     * @return mixed
     */
    public static function byKey($value)
    {
        return self::where('key', $value)->first();
    }
}

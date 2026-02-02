<?php

use Carbon\Carbon;

if (!function_exists('format_time')) {
    function format_time($state, $style = 'num') {
        if (! $state) {
            return null;
        }
        $tz = session('timezone')
            ?? config('app.timezone');

        if ($style === 'num') {
            return Carbon::parse($state)
                ->setTimezone($tz)
                ->format('n/j/y g:i A');
        } else {
            return Carbon::parse($state)
                ->setTimezone($tz)
                ->format('F jS, Y');
        }
    }
}

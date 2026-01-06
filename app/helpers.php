<?php

use Carbon\Carbon;

if (!function_exists('format_time')) {
    function format_time($state) {
        if (! $state) {
            return null;
        }
        $tz = session('timezone')
            ?? config('app.timezone');
        return Carbon::parse($state)
            ->setTimezone($tz)
            ->format('n/j/y g:i A');
    }
}
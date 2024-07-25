<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('setActiveClass')) {
    /**
     * Set the active class for navigation items.
     *
     * @param string|array $routes
     * @return string
     */
    function setActiveClass($routes)
    {
        if (is_array($routes)) {
            return in_array(Route::currentRouteName(), $routes) ? 'active' : '';
        }
        return Route::currentRouteName() == $routes ? 'active' : '';
    }
}

// You can add more helper functions here as needed

// For example:
if (!function_exists('formatDate')) {
    /**
     * Format a date.
     *
     * @param string $date
     * @param string $format
     * @return string
     */
    function formatDate($date, $format = 'Y-m-d')
    {
        return date($format, strtotime($date));
    }
}

// Another example:
if (!function_exists('truncate')) {
    /**
     * Truncate a string.
     *
     * @param string $string
     * @param int $length
     * @param string $append
     * @return string
     */
    function truncate($string, $length = 100, $append = "...")
    {
        $trimmed = substr($string, 0, $length);
        return strlen($string) > $length ? $trimmed . $append : $trimmed;
    }
}
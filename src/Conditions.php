<?php

if (function_exists('not_null') === false) {
    /**
     * @param $value
     * @return bool
     */
    function not_null($value)
    {
        return !is_null($value);
    }
}

if (function_exists('is_false') === false) {
    /**
     * @param $value
     * @param bool $loose
     * @return bool
     */
    function is_false($value, $loose = false)
    {
        if ($loose) {
            return $value == false;
        }

        return $value === false;
    }
}

if (function_exists('not_false') === false) {
    /**
     * @param $value
     * @param bool $loose
     * @return bool
     */
    function not_false($value, $loose = false)
    {
        if ($loose) {
            return $value != false;
        }

        return $value !== false;
    }
}

if (function_exists('is_true') === false) {
    /**
     * @param $value
     * @param bool $loose
     * @return bool
     */
    function is_true($value, $loose = false)
    {
        if ($loose) {
            return $value == true;
        }

        return $value === true;
    }
}

if (function_exists('not_true') === false) {
    /**
     * @param $value
     * @param bool $loose
     * @return bool
     */
    function not_true($value, $loose = false)
    {
        if ($loose) {
            return $value != true;
        }

        return $value !== true;
    }
}

if (function_exists('not_in_array') === false) {
    /**
     * @param $needle
     * @param $haystack
     * @return bool
     */
    function not_in_array($needle, $haystack)
    {
        return !in_array($needle, $haystack);
    }
}

if (function_exists('not_empty') === false) {
    /**
     * @param $value
     * @return bool
     */
    function not_empty($value)
    {
        return !empty($value);
    }
}
<?php

if (function_exists('null_if_empty') === false) {

    /**
     * @param $value
     * @param bool $trim
     * @return null
     */
    function null_if_empty($value, $trim = true)
    {
        if (is_array($value)) {
            foreach ($value as $key => $line) {
                $value[$key] = null_if_empty($line);
            }

            return $value;
        } elseif ($trim && empty(trim($value))) {
            return null;
        } elseif (empty($value)) {
            return null;
        }

        return $value;
    }
}

if (function_exists('string_starts_with') === false) {
    function string_starts_with($haystack, $needle)
    {
        $length = strlen($needle);

        return (substr($haystack, 0, $length) === $needle);
    }
}

if (function_exists('string_ends_with') === false) {
    function string_ends_with($haystack, $needle)
    {
        $length = strlen($needle);

        return $length === 0 ||
            (substr($haystack, -$length) === $needle);
    }
}
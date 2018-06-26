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
        if (is_array($needle)) {
            foreach ($needle as $single) {
                $length = strlen($single);
                if ((substr($haystack, 0, $length) === $single)) {
                    return true;
                }
            }
        } else {
            $length = strlen($needle);

            return (substr($haystack, 0, $length) === $needle);
        }

        return false;
    }
}

if (function_exists('string_ends_with') === false) {
    function string_ends_with($haystack, $needle)
    {
        if (is_array($needle)) {
            foreach ($needle as $single) {
                $length = strlen($needle);

                if ($length === 0 || (substr($haystack, -$length) === $needle)) {
                    return true;
                };
            }
        } else {
            $length = strlen($needle);

            return $length === 0 || (substr($haystack, -$length) === $needle);
        }

        return false;
    }
}
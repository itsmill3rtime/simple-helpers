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
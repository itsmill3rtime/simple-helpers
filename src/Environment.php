<?php
if (function_exists('server') === false) {
    /**
     * @param $value
     * @return null
     */
    function server($value)
    {
        if (isset($_SERVER[$value])) {
            return $_SERVER[$value];
        }

        return null;
    }
}